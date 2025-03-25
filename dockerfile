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

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Permite rodar o Composer como root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Copia os arquivos do projeto para o container
COPY . .

# Garante que as permissões estão corretas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Instala as dependências com otimização para produção
RUN composer install --no-dev --optimize-autoloader --no-progress

# Expõe a porta padrão do Apache
EXPOSE 80

# Comando para iniciar o servidor e rodar as migrações
CMD ["sh", "-c", "php artisan config:cache && php artisan migrate --force && apache2-foreground"]
