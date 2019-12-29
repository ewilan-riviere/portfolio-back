<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
{{-- <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li class="header">Je suis / Je veux</li>
<li><a href='{{ backpack_url('entity') }}'><i class='fa fa-briefcase'></i> <span>Je veux / Je suis</span></a></li>
<li><a href='{{ backpack_url('step') }}'><i class='fa fa-list-ol'></i> <span>Etapes</span></a></li>

<li class="header">Offres XO Conseil</li>
<li><a href='{{ backpack_url('tool') }}'><i class='fa fa-wrench'></i> <span>Outils</span></a></li>
<li><a href='{{ backpack_url('formation') }}'><i class='fa fa-graduation-cap'></i> <span>Formations</span></a></li>
<li><a href='{{ backpack_url('category-service') }}'><i class='fa fa-tag'></i> <span>Catégories de services</span></a></li>
<li><a href='{{ backpack_url('service') }}'><i class='fa fa-question-circle'></i> <span>Services</span></a></li>

<li class="header">Autres</li>
<li><a href='{{ backpack_url('agency') }}'><i class='fa fa-home'></i> <span>Agences</span></a></li>
<li><a href='{{ backpack_url('slider') }}'><i class='fa fa-picture-o'></i> <span>Sliders</span></a></li>
 --}}

<?php

use App\Helpers\DashboardItem;

$dashboard = [
    new DashboardItem('dashboard','fa fa-columns',trans('backpack::base.dashboard')),
    new DashboardItem('elfinder','fa fa-folder-open',trans('backpack::crud.file_manager')),
    new DashboardItem('technology','fa fa-laptop-code','Technologies'),
    new DashboardItem('category','fa fa-dashboard','Categories'),
    new DashboardItem('formation','fa fa-dashboard','Formations'),
    new DashboardItem('information','fa fa-dashboard','Information'),
    new DashboardItem('media','fa fa-photo-video','Media'),
    new DashboardItem('project','fa fa-folder','Projects'),
    new DashboardItem('skill','fa fa-book','Skills'),
    new DashboardItem('social','fa fa-share-alt','Socials'),
    new DashboardItem('text','fa fa-align-left','Texts'),
];

?>

<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
{{-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class=nav-item><a class=nav-link href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li> --}}


@foreach ($dashboard as $item)
    <li class='nav-item'>
        <a
            class='nav-link'
            href='{{ backpack_url($item->url) }}'
        >
            <i class='nav-icon {{ $item->icon }}'></i>
            {{ $item->name }}
        </a>
    </li>
@endforeach


