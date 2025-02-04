# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instala extensões necessárias
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl libzip-dev \
    && docker-php-ext-install gd pdo pdo_mysql zip \
    && docker-php-ext-enable pdo_mysql

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Copia os arquivos do projeto para o container
COPY . .

# Instala as dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Ajusta permissões para o Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Expõe a porta padrão do Apache
EXPOSE 80

# Comando para iniciar o servidor e preparar o Laravel
CMD ["sh", "-c", "php artisan config:cache && php artisan migrate --force && apache2-foreground"]
