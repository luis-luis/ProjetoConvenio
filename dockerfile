# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Define o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Instala extensões necessárias do PHP
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl libzip-dev \
    && docker-php-ext-install gd pdo pdo_mysql zip \
    && docker-php-ext-enable pdo_mysql

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Permissão para evitar erros ao rodar como root no Docker
ENV COMPOSER_ALLOW_SUPERUSER=1

# Copia os arquivos do projeto para o container ANTES de rodar o Composer
COPY . .

# Adiciona a criação dos diretórios antes de ajustar permissões
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Ajusta permissões antes do Composer
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Instala dependências do Laravel com otimização
RUN composer install --no-dev --optimize-autoloader --no-progress

# Expõe a porta padrão do Apache
EXPOSE 80

# Comando para iniciar o servidor e preparar o Laravel
CMD ["sh", "-c", "php artisan config:cache && php artisan migrate --force && apache2-foreground"]
