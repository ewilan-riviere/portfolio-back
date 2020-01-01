<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $welcome = new Navbar('welcome','welcome','home');
        $router = new Navbar('router','router','navigation');
        $about = new Navbar('about','about','info');

        $login = new Navbar('login','login','lock');
        $logout = new Navbar('logout','logout','lock_open');
        $home = new Navbar('home','home','dashboard');
        $register = new Navbar('register','register','add');

        $navbarSetup = [
            $router,
            $about
        ];

        $navbarAuthSetup = [
            $home,
        ];

        View::share('navbar', $navbarSetup);
        View::share('navbarAuth', $navbarAuthSetup);
    }
}

class Navbar extends Model
{
    /* Member variables */
    var $title;
    var $link;
    var $icon;

    public function __construct($title, $link, $icon)
    {
        $this->title = $title;
        $this->link = $link;
        $this->icon = $icon;
    }
}
