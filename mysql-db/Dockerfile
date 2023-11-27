# Utiliza una imagen base de PHP con Apache
FROM php:7.4-apache

# Instala extensiones de PHP
RUN docker-php-ext-install pdo pdo_mysql

# Copia los archivos de tu aplicación al directorio de Apache
COPY src/ /var/www/html/

# Expone el puerto 80
EXPOSE 80
