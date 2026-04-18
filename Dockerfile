# Usar una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instalar extensiones de PHP necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar el módulo de reescritura de Apache
RUN a2enmod rewrite

# Copiar los archivos del proyecto al directorio de trabajo de Apache
COPY . /var/www/html/

# Ajustar permisos para que Apache pueda leer los archivos
RUN chown -R www-data:www-data /var/www/html/

# Exponer el puerto 80
EXPOSE 80
