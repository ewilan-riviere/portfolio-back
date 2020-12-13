# **Portfolio · Back**

[![PHP 7.3](https://img.shields.io/static/v1?label=PHP&message=v7.3&color=777bb4&style=flat-square&logo=php&logoColor=777bb4)](https://www.php.net)
[![Composer 1.8](https://img.shields.io/static/v1?label=Composer&message=v1.8&color=885630&style=flat-square&logo=composer&logoColor=9f7759)](https://getcomposer.org)  

[![Laravel 7.0](https://img.shields.io/static/v1?label=Laravel&message=7.0&color=ff2d20&style=flat-square&logo=laravel&logoColor=ff2d20)](https://laravel.com)
[![Backpack 4.1](https://img.shields.io/static/v1?label=Backpack&message=v4.1&color=7c69ef&style=flat-square&logo=php&logoColor=7c69ef)](https://backpackforlaravel.com)
[![Swagger 7.0](https://img.shields.io/static/v1?label=Swagger&message=v7.0&color=85EA2D&style=flat-square&logo=swagger&logoColor=85EA2D)](https://swagger.io)

[![NodeJS 12.16](https://img.shields.io/static/v1?label=NodeJS&message=12.16&color=339933&style=flat-square&logo=node.js&logoColor=339933)](https://nodejs.org/en)
[![Yarn 1.22](https://img.shields.io/static/v1?label=Yarn&message=v1.22&color=2C8EBB&style=flat-square&logo=yarn&logoColor=2C8EBB)](https://yarnpkg.com/lang/en/)

**Links**  

- 🌐 [**portfolio.ewilan-riviere.com**](https://portfolio.ewilan-riviere.com)  
- 💻 [**Back-office**](https://portfolio.ewilan-riviere.com/admin/login)  
- 📔 [**Documentation API**](https://portfolio.ewilan-riviere.com/api/documentation)  

>**Admin credentials** :  
>
>**E-mail** : `admin@example.com`  
>**Password** : `password`

---

**Navigation**

- [**I. Setup**](#I-setup)  
- [**II. .env tips**](#II-.env-tips)  
- [**III. VHost configuration**](#III-vhost-configuration)  

---

## Todo

- storm flutter nuxtjs
- pokedroid flutter
- fanfic nuxtjs laravel flutter
- guildwars2 nuxtjs
- roazhonstarbus nuxtjs flutter
- markdownthis nutjs laravel flutter
- fontsbook nuxtjs laravel
- markdowninterpreter nuxtjs
- memorandum nuxtjs content

plugins:

- vue-tailwind-screens-helper

pro:

- imprimerie le gailliard nuxtjs laravel backpack
- secob nuxtjs laravel backpack
- naviso nuxtjs laravel backpack
- captransactions vuejs laravel coreui flutter
- laforet nuxtjs laravel coreui
- useweb blog tech nuxtjs

## **I. Setup**

Create new database into phpMyAdmin, call it `portfolio`. And create `.env` and fill it:

``` bash
cp .env.example .env
```

In your IDE, fill these informations:

```js
DB_DATABASE=  
DB_USERNAME=  
DB_PASSWORD=  
```

---

```bash
composer install
php artisan key:generate
php artisan storage:link
php artisan backpack:install
php artisan migrate:fresh --seed
```

## **II. .env tips**

Check theses var into `.env` file and replace with these:

```js
// todo
```

## **III. VHost configuration**

### **Apache**

TODO

### **NGINX**

NGINX for production

```nginx
server {
    server_name portfolio.ewilan-riviere.com;
    root /home/ewilan/www/portfolio-back/public;
    index index.php;

    location / {
        include proxy_params;
        proxy_pass http://localhost:3001;
    }

    location ~ ^/(admin|api|css|media|uploads|storage|docs|packages|cache) {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include         snippets/fastcgi-php.conf;
        fastcgi_pass    unix:/var/run/php/php7.4-fpm.sock;
    }
}
```

Stop and restart NGINX and the app will be available to [**http://portfolio.localhost**](http://portfolio.localhost)
