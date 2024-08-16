## Commands for run project

- `docker-compose run composer install` - for install composer dependencies
- `docker-compose up nginx -d` - for run docker containers
- `cp ./src/.env.development ./src/.env` - for setup .env file
- `docker-compose run artisan key:generate` - for generate application key
- `docker-compose run artisan migrate` - for migrate migration to DB
- `docker-compose run artisan db:seed` - for fill DB with data

