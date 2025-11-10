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

# Habilita o mod_rewrite do Apache (necessário para Laravel)
RUN a2enmod rewrite

# Configura o VirtualHost para apontar para /public
RUN printf "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Permite rodar o Composer como root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Copia os arquivos do projeto para o container
COPY . .

# Garante permissões corretas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Instala dependências do PHP para produção
RUN composer install --no-dev --optimize-autoloader --no-progress

# Expor a porta 80
EXPOSE 80

# Inicia o Apache
CMD ["apache2-foreground"]
