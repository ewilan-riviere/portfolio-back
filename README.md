# **Portfolio · Back**

![alt](public/css/logo.png)

[![PHP 7.3](https://img.shields.io/static/v1?label=PHP&message=v7.3&color=777bb4&style=flat-square&logo=php&logoColor=777bb4)](https://www.php.net)
[![Composer 1.8](https://img.shields.io/static/v1?label=Composer&message=v1.8&color=885630&style=flat-square&logo=composer&logoColor=9f7759)](https://getcomposer.org)  

[![Laravel 7.0](https://img.shields.io/static/v1?label=Laravel&message=7.0&color=ff2d20&style=flat-square&logo=laravel&logoColor=ff2d20)](https://laravel.com)
[![Backpack 4.1](https://img.shields.io/static/v1?label=Backpack&message=v4.1&color=7c69ef&style=flat-square&logo=php&logoColor=7c69ef)](https://backpackforlaravel.com)
[![Swagger 7.0](https://img.shields.io/static/v1?label=Swagger&message=v7.0&color=85EA2D&style=flat-square&logo=swagger&logoColor=85EA2D)](https://swagger.io)   

[![NodeJS 10.16](https://img.shields.io/static/v1?label=NodeJS&message=10.16&color=339933&style=flat-square&logo=node.js&logoColor=339933)](https://nodejs.org/en)
[![Yarn 1.22](https://img.shields.io/static/v1?label=Yarn&message=v1.22&color=2C8EBB&style=flat-square&logo=yarn&logoColor=2C8EBB)](https://yarnpkg.com/lang/en/)

**Links**  
- ðŸŒ [**naviso.fr**](https://www.naviso.fr)  
- ðŸŒ [**naviso.useweb.net**](http://naviso.useweb.net/)  
- ðŸ’» [**Back-office**](http://naviso.useweb.net/admin/login)  
- ðŸ“š [**Documentation API**](http://naviso.useweb.net/api/documentation)  
- ðŸŽ¨ [**Design**](https://xd.adobe.com/view/c1174a47-1988-4c4d-4163-61164ec0e5b9-b726/)

>**Admin credentials** :  
>
>**E-mail** : `superadmin@example.com`  
>**Password** : `password`

---

**Navigation**

- [**I. Setup**](#I-setup)  
- [**II. .env tips**](#II-.env-tips)  
- [**III. VHost configuration**](#III-vhost-configuration)  

---

## **I. Setup**


Create new database into phpMyAdmin, call it `naviso`. And create `.env` and fill it:

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

#### WARNING
`php artisan backpack:install` will generate entry to `resources\views\vendor\backpack\base\inc\sidebar_content.blade.php` about **Dashboard**, you have to delete the last entry

## **II. .env tips**

Check theses var into `.env` file and replace with these:

```js
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=e9ed440541ee42
MAIL_PASSWORD=663092023da841
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="noreply@naviso.fr"
MAIL_FROM_NAME="${APP_NAME}"
MAIL_TO_ADDRESS="contact@naviso.fr"
MAIL_TO_NAME="Naviso"
```

```js
SARBACANE_API='https://sarbacaneapis.com/v1/'
SARBACANE_ACCOUNT_ID='5b05719bb85b536066d90aac'
SARBACANE_API_KEY='K6P8GynAT5O1KLqgg2NqLA'
SARBACANE_LIST_ID='rpu8kBM5Ro6b5UWJxt9JGw'

BACKPACK_REGISTRATION_OPEN=false
BACKPACK_LICENSE=AAVA-EAF4-9858-GFC8-3CEF-7643

GOOGLE_RECAPTCHA_SECRET=
L5_SWAGGER_GENERATE_ALWAYS=false
```

## **III. VHost configuration**

### **Apache**

Add this config to the end of VHost config file for XAMPP, change path if it's necessary for `DocumentRoot` and `Directory`:

`C:/xampp/apache/conf/extra/httpd-vhosts.conf`

```apache
<VirtualHost *:80>
	ServerName naviso.localhost
	DocumentRoot "c:/workspace/naviso-back/public"
    RedirectMatch ^/$ /admin/login
    RedirectMatch ^/home$ /admin/dashboard
    <Directory "c:/workspace/naviso-back">
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
</VirtualHost>
```

### **NGINX**

```nginx
server {
    listen 80;
    server_name naviso.localhost;
    root C:\workspace/naviso-back\public;
    index index.php index.html index.htm index.nginx-debian.html;

    location = / {
        return http://$host/admin;
    }
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ ^/media/cache {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass   127.0.0.1:9073;
        include        fastcgi.conf;
    }
}
```

Add these lines at the end of `hosts` file:

`C:/Windows/System32/drivers/etc/hosts`

```bash
127.0.0.1	naviso.localhost
::1	naviso.localhost
```

Stop and restart Apache and your app will be available to [**http://naviso.localhost**](http://naviso.localhost)
