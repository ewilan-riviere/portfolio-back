# **Ewilan Rivière Portfolio · Back-end**

[![Laravel 6.2](https://img.shields.io/badge/Laravel-6.2-red)](https://laravel.com)
[![PHP 7.2](https://img.shields.io/badge/PHP-7.2-blue)](https://www.php.net)
[![Composer 1.8](https://img.shields.io/badge/Composer-1.8-green)](https://getcomposer.org)

*Only local depolyment*

[![NodeJS 11.15](https://img.shields.io/badge/NodeJS-11.15-green)](https://nodejs.org/en)
[![Yarn 1.19](https://img.shields.io/badge/Yarn-1.19-blue)](https://nodejs.org/en)  

**Front-end : [Ewilan Rivière Portfolio · Front-end](https://github.com/ewilan-riviere/ewilan-riviere-portfolio-front)**  
**Deploy on : [api.ewilan-riviere.tech](http://api.ewilan-riviere.tech)**

---

### **Summary**

1. [**About**](#1-about)
    * a. [*Laravel Docs*](#a-laravel-docs)
2. [**Deployment**](#2-deployment)
    * a. [*Local deployment*](#a-local-deployment)
    * b. [*Production deployment*](#b-production-deployment)
3. [**Documentation**](#3-documentation)
    * a. [*Admin account*](#a-admin-account)
    * b. [*Routes*](#b-routes)

---

## **1. About**

This is the API of *Ewilan Rivière Portfolio* web app.

### ***a. Laravel Docs***
- [Docs](https://laravel.com/docs/6.x)
- [Laracasts](https://laracasts.com)
- [GitHub](https://github.com/laravel/laravel)

---

## **2. Deployment**

#### Env variables
```bash
# Create .env and fill it with database informations
cp .env.example .env
vim .env
```
Fill theses infos
```bash
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### ***a. Local deployment***
```bash
# Laravel dependencies
composer install
# Create key
php artisan key:generate
# Feed database
php artisan migrate:fresh --seed
# Link storage
php artisan storage:link
# Backpack
php artisan backpack:install
# Launch server
php artisan serve
```
#### For `app.scss` and `app.js`
```bash
# npm is a option
# NodeJS dependencies
yarn install
# Run mix
yarn run dev

yarn watch
```

### ***b. Production deployment***

#### Env variables
```bash
APP_ENV=production
APP_DEBUG=false
```
---

## **3. Documentation**

This is a [**Laravel**](https://laravel.com/) web app, check out the [**Wiki**](https://github.com/ewilan-riviere/ewilan-riviere-portfolio-back/wiki) to learn more about documentation.

### ***a. Admin account***
**E-mail:** *ewilan@admin.com*  
**Password :** *password*

### ***b. Routes***

Routes list is also available on server, tab Routes
```bash
# List of users
api/users
```

---

**POWERED BY**  

![Laravel](public/images/readme/logo-laravel-title.png)
