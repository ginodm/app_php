FROM php:8.2-apache

# Abilita mod_rewrite (utile per MVC)
RUN a2enmod rewrite
# Imposta DocumentRoot su /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' \
    /etc/apache2/sites-available/000-default.conf
# Imposta ServerName per evitare il warning
RUN echo "ServerName localhost" > /etc/apache2/conf-available/servername.conf \
    && a2enconf servername
# Permessi corretti
RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html
