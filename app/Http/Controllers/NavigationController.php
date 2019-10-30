<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class NavigationController extends Controller
{
    /**
     * Display welcome view.
     *
     * @return view
     */
    public function welcome()
    {
        return view('welcome');
    }
    /**
     * Display welcome view.
     *
     * @return view
     */
    public function about()
    {
        $about_links = [
            new Link(
                'icon',
                'GitLab Repository · Back-end',
                'https://gitlab.com/EwieFairy/nom-qui-claque-back'
            ),
            new Link(
                'icon',
                'GitLab Repository · Front-end',
                'https://gitlab.com/Norahenn/nom-qui-claque-front'
            ),
            new Link(
                'icon',
                'README · Back-end',
                'https://gitlab.com/EwieFairy/nom-qui-claque-back/blob/master/README.md'
            ),
            new Link(
                'icon',
                'Wiki · Back-end',
                'https://gitlab.com/EwieFairy/nom-qui-claque-back/wikis/home'
            ),
            new Link(
                'icon',
                'Wiki · Front-end',
                'https://gitlab.com/Norahenn/nom-qui-claque-front/wikis/home'
            )
        ];
        return view('about', compact('about_links'));
    }
    /**
     * Display welcome view.
     *
     * @return view
     */
    public function router()
    {
        $route_links = [
            new Link(
                'icon',
                'users',
                'api/users'
            )
        ];
        return view('router', compact('route_links'));
    }
}

class Link extends Model
{
    /* Member variables */
    var $icon;
    var $title;
    var $link;

    public function __construct($icon, $title, $link) 
    { 
        $this->icon = $icon;
        $this->title = $title;
        $this->link = $link;
    } 
}