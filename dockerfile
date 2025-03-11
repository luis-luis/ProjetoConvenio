# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Define o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Atualiza pacotes e instala extensões do PHP
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl libzip-dev \
    && docker-php-ext-install gd pdo pdo_mysql zip \
    && docker-php-ext-enable pdo_mysql

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Permite rodar o Composer como root (evita erro no Docker)
ENV COMPOSER_ALLOW_SUPERUSER=1

# Copia apenas o composer.json e composer.lock antes para otimizar cache
COPY composer.json composer.lock ./

# Instala dependências antes de copiar o restante do código
RUN composer install --no-dev --optimize-autoloader --no-progress

# Copia todos os arquivos do projeto para o container
COPY . .

# Cria e ajusta as permissões dos diretórios necessários
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Limpa o cache do Laravel e cria cache de config otimizado
RUN php artisan cache:clear && php artisan config:cache

# Expõe a porta padrão do Apache
EXPOSE 80

# Executa migrações e inicia o servidor Apache
CMD ["sh", "-c", "php artisan migrate --force && apache2-foreground"]
