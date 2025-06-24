# Laravel JWT API Starter

This project is a Laravel-based REST API starter with **JWT Authentication** using [`php-open-source-saver/jwt-auth`](https://github.com/php-open-source-saver/jwt-auth). It includes:

- User registration & login
- JWT-based token handling
- Token version invalidation middleware
- Protected `Todo` resource

---

## ⚙️ Requirements

- PHP 8.1+
- Composer
- Laravel 12
- MySQL or SQLite
- [JWTAuth package](https://github.com/php-open-source-saver/jwt-auth)

---

## 🚀 Installation

```bash
git clone https://github.com/shafkat63/laravel_jwt
cd laravel-jwt-api

composer install
cp .env.example .env
php artisan key:generate

# Set DB credentials in .env
# DB_DATABASE, DB_USERNAME, DB_PASSWORD

php artisan migrate

# Generate JWT secret key
php artisan jwt:secret
