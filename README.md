### Software Stack
- Docker 20.10.13
- PHP 8.2.3
- MySQL 8.1.0
- Laravel 11.9
- Swagger Api Documentation


### Base Settings
1. Run git clone git@github.com:dsswork/test-laravel.git
2. Run cp .env.example .env
3. Set up your settings in .env:
    - DOCKER_NGINX_PORT
    - DOCKER_USERNAME
    - DOCKER_USER_ID
4. Run docker compose build
5. Run docker compose up -d
6. Run docker exec -it test-laravel-app bash
7. Run composer install
8. Run php artisan key:generate
9. Run php artisan migrate

For open Swagger docs, go to main page.
