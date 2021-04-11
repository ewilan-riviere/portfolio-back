# **Portfolio · Back** <!-- omit in toc -->

[![php](https://img.shields.io/static/v1?label=PHP&message=v8.0&color=777bb4&style=flat-square&logo=php&logoColor=ffffff)](https://www.php.net)
[![composer](https://img.shields.io/static/v1?label=Composer&message=v2.0&color=885630&style=flat-square&logo=composer&logoColor=ffffff)](https://getcomposer.org)
[![mysql](https://img.shields.io/static/v1?label=MySQL&message=v8.0&color=4479A1&style=flat-square&logo=mysql&logoColor=ffffff)](https://www.mysql.com)

[![laravel](https://img.shields.io/static/v1?label=Laravel&message=8.0&color=ff2d20&style=flat-square&logo=laravel&logoColor=ffffff)](https://laravel.com)
[![swagger](https://img.shields.io/static/v1?label=Swagger&message=v3.0&color=85EA2D&style=flat-square&logo=swagger&logoColor=ffffff)](https://swagger.io)

[![nodejs](https://img.shields.io/static/v1?label=NodeJS&message=12.16&color=339933&style=flat-square&logo=node.js&logoColor=ffffff)](https://nodejs.org/en)
[![yarn](https://img.shields.io/static/v1?label=Yarn&message=v1.2&color=2C8EBB&style=flat-square&logo=yarn&logoColor=ffffff)](https://yarnpkg.com/lang/en/)

- 🌐 [**ewilan-riviere.com**](https://ewilan-riviere.com)  
- 📔 [**Documentation API**](https://ewilan-riviere.com/api/documentation)  

---

**Navigation**

- [**I. Setup**](#i-setup)
- [**II. VHost configuration**](#ii-vhost-configuration)
- [Todo](#todo)
  - [Add projects](#add-projects)
  - [Add plugins](#add-plugins)
  - [Add profesionnal](#add-profesionnal)

---

## **I. Setup**

Create new database into **MySQL**, call it `portfolio` and install **composer** dependencies.

```bash
composer install
```

Execute command to setup project.

```bash
php artisan setup:install portfolio
```

## **II. VHost configuration**

NGINX for production

```nginx
server {
    server_name ewilan-riviere.com www.ewilan-riviere.com;
    root /home/ewilan/www/portfolio-back/public;
    index index.php;

    error_log /var/log/nginx/ewilan-riviere-com.log warn;
    access_log  /var/log/nginx/ewilan-riviere-com.log;

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

## Todo

### Add projects

- [x] storm flutter nuxtjs
- [x] pokedroid flutter
- [ ] fanfic nuxtjs laravel flutter
- [ ] guildwars2 nuxtjs
- [ ] roazhonstarbus nuxtjs flutter
- [ ] markdownthis nutjs laravel flutter
- [ ] fontsbook nuxtjs laravel
- [ ] markdowninterpreter nuxtjs
- [ ] memorandum nuxtjs content

### Add plugins

- [ ] vue-tailwind-screens-helper

### Add profesionnal

- [ ] imprimerie le gailliard nuxtjs laravel backpack
- [ ] secob nuxtjs laravel backpack
- [ ] naviso nuxtjs laravel backpack
- [ ] captransactions vuejs laravel coreui flutter
- [ ] laforet nuxtjs laravel coreui
- [ ] useweb blog tech nuxtjs
