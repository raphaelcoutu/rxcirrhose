# RxCirrhose - Docker

## Version WSL

```bash
# Build le Dockerfile pour rxcirrhose/app
docker-compose up -d

# Création du fichier .env
cp .env.example .env
sed -i 's/APP_URL=.*/APP_URL=http://localhost:8080/;  s/DB_HOST=.*/DB_HOST=mysql/; s/DB_DATABASE=.*/DB_DATABASE=rxcirrhose/; s/DB_PASSWORD=.*/DB_PASSWORD=admin/' .env
```
Au besoin, il faut spécifier le UID du WWWUSER dans le .env (à exécuter dans WSL, pas dans le container)
```console
$ id
uid=1000(raph244) gid=1000(raph244) groups=1000(raph244),4(adm),20(dialout),24(cdrom),25(floppy),27(sudo),29(audio),30(dip),44(video),46(plugdev),117(netdev),1001(docker)
```

On peut donc spécifier dans le fichier .env
```
WWWUSER=1000
```


```
# Installer composer et php (si pas déjà fait au préalable)
sudo apt-get install composer (installera également php)
php artisan key:generate
php artisan key:migrate

composer install

# Installer nodejs (cf github.com/nodesource/distributions)
npm install
npm run dev
```

## Version Hyper-V (classique)

```bash
docker-compose up -d

# Création du fichier .env
docker-compose exec app cp .env.example .env
docker-compose exec app sed -i 's/APP_URL=.*/APP_URL=http://localhost:8080/;  s/DB_HOST=.*/DB_HOST=mysql/; s/DB_DATABASE=.*/DB_DATABASE=rxcirrhose/; s/DB_PASSWORD=.*/DB_PASSWORD=admin/' .env

docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate

# Ajout des dépendances
docker-compose exec app composer install
docker run -it --rm -v ${PWD}/..:/opt -w /opt node:14 npm install
docker run -it --rm -v ${PWD}/..:/opt -w /opt node:14 npm run dev

# Tester l'application
docker-compose exec app ./vendor/bin/phpunit
```
