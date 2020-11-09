FROM php:7.4-apache
#Install git
RUN apt-get update
RUN apt-get install -y git
# Instalando mysqli
RUN docker-php-ext-install pdo pdo_mysql mysqli
# Habilitando o modo de reescrita do Apache e porta correta do Heroku
RUN a2enmod rewrite
COPY ./apache-config/ports.conf /etc/apache2/ports.conf                                
COPY ./apache-config/000-default.conf /etc/apache2/sites-available/000-default.conf    
CMD docker-php-entrypoint apache2-foreground
#Instalando Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/
COPY src/ /var/www/html/
EXPOSE 80