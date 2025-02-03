# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instala extensões necessárias
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl \
    && docker-php-ext-install gd pdo pdo_mysql

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Copia os arquivos do projeto para o container
COPY . .

# Instala as dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Permissões para o diretório de cache do Laravel
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Expõe a porta padrão do Apache
EXPOSE 80

# Comando para iniciar o servidor
CMD ["apache2-foreground"]
