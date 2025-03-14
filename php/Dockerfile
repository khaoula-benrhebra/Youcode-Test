# Utiliser PHP 8.2 avec Apache
FROM php:8.2-apache

# Installer les dépendances et extensions nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    curl \
    nodejs \
    npm && \
    docker-php-ext-install pdo pdo_pgsql && \
    a2enmod rewrite && \
    rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Modifier le VirtualHost pour pointer vers le dossier 'public' de Laravel
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Définir le dossier de travail
WORKDIR /var/www/html

# Créer les dossiers manquants avant d’appliquer les permissions
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port 80
EXPOSE 80

# Lancer Apache en mode foreground
CMD ["apache2-foreground"]

# Installer Node.js et npm
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

    