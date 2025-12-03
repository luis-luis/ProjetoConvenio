# Dockerfile - Laravel (Apache + PHP 8.2) - genérico para produção
FROM php:8.2-apache

# --- variáveis e diretório de trabalho
ENV COMPOSER_ALLOW_SUPERUSER=1
WORKDIR /var/www/html

# --- instalar dependências do sistema e extensões PHP necessárias
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl libzip-dev git libpq_dev\
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql pdo_pgsql zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# --- habilitar mod_rewrite
RUN a2enmod rewrite

# --- definir ServerName para suprimir warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# --- configurar VirtualHost para apontar para /public (uso de printf evita problemas de uma-linha)
RUN printf "<VirtualHost *:80>\n\
    ServerName localhost\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
    ErrorLog /var/log/apache2/error.log\n\
    CustomLog /var/log/apache2/access.log combined\n\
</VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf

# --- instalar composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# --- copiar o projeto
# Importante: não versionar .env com dados sensíveis; o Render usa variáveis de ambiente.
COPY . .

# --- permissões (ajuste para storage e bootstrap cache)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# --- instalar dependências PHP via Composer (sem dev)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# --- limpar caches gerados em build (apenas se existir)
RUN if [ -f artisan ]; then php artisan view:clear || true; fi

EXPOSE 80

# --- comando final: inicia o Apache (não roda migrations)
CMD ["apache2-foreground"]
