# # Dockerfile - Laravel (Apache + PHP 8.2) - genérico para produção
# FROM php:8.2-apache

# # --- variáveis e diretório de trabalho
# ENV COMPOSER_ALLOW_SUPERUSER=1
# WORKDIR /var/www/html

# # --- instalar dependências do sistema e extensões PHP necessárias
# RUN apt-get update && apt-get install -y --no-install-recommends \
#     libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl libzip-dev git \
#     && docker-php-ext-configure gd --with-jpeg --with-freetype \
#     && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip \
#     && apt-get clean && rm -rf /var/lib/apt/lists/*

# # --- habilitar mod_rewrite
# RUN a2enmod rewrite

# # --- definir ServerName para suprimir warning
# RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# # --- configurar VirtualHost para apontar para /public (uso de printf evita problemas de uma-linha)
# RUN printf "<VirtualHost *:80>\n\
#     ServerName localhost\n\
#     DocumentRoot /var/www/html/public\n\
#     <Directory /var/www/html/public>\n\
#         AllowOverride All\n\
#         Require all granted\n\
#     </Directory>\n\
#     ErrorLog /var/log/apache2/error.log\n\
#     CustomLog /var/log/apache2/access.log combined\n\
# </VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf

# # --- instalar composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # --- copiar o projeto
# # Importante: não versionar .env com dados sensíveis; o Render usa variáveis de ambiente.
# COPY . .

# # --- permissões (ajuste para storage e bootstrap cache)
# RUN chown -R www-data:www-data /var/www/html \
#     && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# # --- instalar dependências PHP via Composer (sem dev)
# RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# # --- limpar caches gerados em build (apenas se existir)
# RUN if [ -f artisan ]; then php artisan view:clear || true; fi

# EXPOSE 80

# # --- comando final: inicia o Apache (não roda migrations)
# CMD ["apache2-foreground"]


# Usa a imagem oficial do PHP 8.2 com Apache
FROM php:8.2-apache

# Define o diretório de trabalho
WORKDIR /var/www/html

# Instala extensões necessárias do PHP
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl libzip-dev \
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install gd pdo pdo_mysql zip \
    && docker-php-ext-enable pdo_mysql

# Ativa mod_rewrite do Apache
RUN a2enmod rewrite

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Permite rodar o Composer como root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Copia os arquivos do projeto para o container
COPY . .

# Garante que as permissões estão corretas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Ajusta o DocumentRoot do Apache para a pasta public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Permite uso do .htaccess
RUN sed -i '/<Directory \/var\/www\/html\/public>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Ajusta permissões da pasta public
RUN chown -R www-data:www-data /var/www/html/public
RUN chmod -R 755 /var/www/html/public

# Instala as dependências com otimização para produção
RUN composer install --no-dev --optimize-autoloader --no-progress

# Expõe a porta padrão do Apache
EXPOSE 80

# Comando para iniciar o servidor Apache
CMD ["sh", "-c", "php artisan config:cache && apache2-foreground"]