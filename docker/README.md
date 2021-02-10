# RxCirrhose - Docker

```bash
docker-compose up -d

# Création du fichier .env
docker-compose exec app cp .env.example .env
docker-compose exec app sed -i 's/DB_HOST=.*/DB_HOST=mysql/; s/DB_DATABASE=.*/DB_DATABASE=rxcirrhose/; s/DB_PASSWORD=.*/DB_PASSWORD=admin/' .env

docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate

# Ajout des dépendances
docker-compose exec app composer install
docker run -it --rm -v ${PWD}/..:/opt -w /opt node:14 npm install
docker run -it --rm -v ${PWD}/..:/opt -w /opt node:14 npm run dev

# Tester l'application
docker-compose exec app ./vendor/bin/phpunit
```
