<?php

use App\Helpers\DashboardItem;

$portfolioSkills = [
    new DashboardItem('skills','fa fa-code','Compétences',false,null),
    new DashboardItem('categories','fa fa-tags','Catégories',false,null),
    new DashboardItem('formations','fa fa-graduation-cap','Formations',false,null),
    new DashboardItem('passions','fa fa-heart','Passions',false,null),
];

$portfolioContents = [
    new DashboardItem('socials','fa fa-share-alt','Réseaux sociaux',false,null),
    new DashboardItem('texts','fa fa-align-left','Textes',false,null),
    new DashboardItem('medias','fa fa-photo-video','Médias',false,null),
];

$dashboard = [
    new DashboardItem('dashboard','fa fa-columns','Tableau de bord',false,null),
];

$fileManager = [
    new DashboardItem('elfinder','fa fa-folder-open','Fichiers',false,null),
];

$portfolio = [
    new DashboardItem('projects','fa fa-folder','Projets',false,null),
    new DashboardItem(null,'fa fa-book','Connaissances',true,$portfolioSkills),
    new DashboardItem(null,'fa fa-clone','Contenus',true,$portfolioContents)
];

$global = [
    new DashboardItem('snippets','fa fa-code','Snippets',false,null)
];

?>

@foreach ($dashboard as $link)
    <li class='nav-item'>
        <a
            class='nav-link'
            href='{{ backpack_url($link->url) }}'
        >
            <i class='nav-icon {{ $link->icon }}'></i>
            {{ $link->name }}
        </a>
    </li>
@endforeach

@foreach ($fileManager as $link)
    <li class='nav-item'>
        <a
            class='nav-link'
            href='{{ backpack_url($link->url) }}'
        >
            <i class='nav-icon {{ $link->icon }}'></i>
            {{ $link->name }}
        </a>
    </li>
@endforeach

<li class="nav-title mt-3">
    <i class='fa fab fa-firefox mr-2'></i> Global
</li>

@foreach ($global as $link)
    @if (!$link->activeSubmenu)
        <li class='nav-item'>
            <a
                class='nav-link'
                href='{{ backpack_url($link->url) }}'
            >
                <i class='nav-icon {{ $link->icon }}'></i>
                {{ $link->name }}
            </a>
        </li>
    @else
        <li class='nav-item nav-dropdown'>
            <a
                class='nav-link nav-dropdown-toggle'
                href="#"
            >
                <i class='nav-icon {{ $link->icon }}'></i>
                {{ $link->name }}
            </a>
            <ul class="nav-dropdown-items">
                @foreach ($link->submenu as $skill)
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ backpack_url($skill->url) }}"
                        >
                            <i class="nav-icon {{ $skill->icon }}"></i>
                            <span>{{ $skill->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @endif
@endforeach

<li class="nav-title mt-3">
    <i class='fa fa-share-alt mr-2'></i> Portfolio
</li>

@foreach ($portfolio as $link)
    @if (!$link->activeSubmenu)
        <li class='nav-item'>
            <a
                class='nav-link'
                href='{{ backpack_url($link->url) }}'
            >
                <i class='nav-icon {{ $link->icon }}'></i>
                {{ $link->name }}
            </a>
        </li>
    @else
        <li class='nav-item nav-dropdown'>
            <a
                class='nav-link nav-dropdown-toggle'
                href="#"
            >
                <i class='nav-icon {{ $link->icon }}'></i>
                {{ $link->name }}
            </a>
            <ul class="nav-dropdown-items">
                @foreach ($link->submenu as $skill)
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ backpack_url($skill->url) }}"
                        >
                            <i class="nav-icon {{ $skill->icon }}"></i>
                            <span>{{ $skill->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @endif
@endforeach

<li class="nav-title mt-3">
    <i class='fa fa-seedling mr-2'></i> Monstera
</li>

<li class='nav-item'>
    <a
        class='nav-link'
        href='#'
    >
        <i class='nav-icon fa fa-seedling'></i>
        En attente
    </a>
</li>
