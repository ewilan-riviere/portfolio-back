<?php

use App\Helpers\DashboardItem;

$skills = [
    new DashboardItem('skill','fa fa-book','Compétences',false,null),
    new DashboardItem('technology','fa fa-code','Technologies',false,null),
    new DashboardItem('category','fa fa-tags','Catégories',false,null),
    new DashboardItem('formation','fa fa-graduation-cap','Formations',false,null),
];

$contents = [
    new DashboardItem('social','fa fa-share-alt','Réseaux sociaux',false,null),
    new DashboardItem('text','fa fa-align-left','Textes',false,null),
    new DashboardItem('media','fa fa-photo-video','Médias',false,null),
];

$api = [
    new DashboardItem('/api/users','fa fa-share-alt','users',false,null),
    new DashboardItem('/api/text','fa fa-align-left','Textes',false,null),
    new DashboardItem('/api/media','fa fa-photo-video','Médias',false,null),
];

$dashboard = [
    new DashboardItem('dashboard','fa fa-columns',trans('backpack::base.dashboard'),false,null),
];

$fileManager = [
    new DashboardItem('elfinder','fa fa-folder-open',trans('backpack::crud.file_manager'),false,null),
];

$body = [
    new DashboardItem('project','fa fa-folder','Projets',false,null),
    new DashboardItem(null,'fa fa-book','Connaissances',true,$skills),
    new DashboardItem(null,'fa fa-clone','Contenus',true,$contents),
    new DashboardItem(null,'fa fa-clone','Routes',true,$api),
];

?>

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

<li class="nav-title">
    Fichiers
</li>

@foreach ($fileManager as $item)
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

<li class="nav-title">
    Back-office
</li>

@foreach ($body as $item)
    @if (!$item->activeSubmenu)
        <li class='nav-item'>
            <a
                class='nav-link'
                href='{{ backpack_url($item->url) }}'
            >
                <i class='nav-icon {{ $item->icon }}'></i>
                {{ $item->name }}
            </a>
        </li>
    @else
        <li class='nav-item nav-dropdown'>
            <a
                class='nav-link nav-dropdown-toggle'
                href="#"
            >
                <i class='nav-icon {{ $item->icon }}'></i>
                {{ $item->name }}
            </a>
            <ul class="nav-dropdown-items">
                @foreach ($item->submenu as $skill)
                    @if (strpos($skill->url, 'api/'))
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ config('app.url') }}{{ $skill->url }}"
                            >
                                <i class="nav-icon {{ $skill->icon }}"></i>
                                <span>{{ $skill->name }}</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ backpack_url($skill->url) }}"
                            >
                                <i class="nav-icon {{ $skill->icon }}"></i>
                                <span>{{ $skill->name }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    @endif
@endforeach


<li class=nav-item><a class=nav-link href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>