<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-tachometer-alt',
    'url' => backpack_url('dashboard'),
    'label' => trans('backpack::base.dashboard')
])

{{--
<li class="nav-title">
    Category
</li>
--}}

{{--
<li class='nav-item nav-dropdown'>
    <a
        class='nav-link nav-dropdown-toggle'
        href="#"
    >
        <i class='nav-icon fas fa-blog'></i>
        Dropdown
    </a>
    <ul class="nav-dropdown-items">
        
    </ul>
</li>
--}}
<li class='nav-item nav-dropdown'>
    <a
        class='nav-link nav-dropdown-toggle'
        href="#"
    >
        <i class='nav-icon fas fa-cogs'></i>
        Administration
    </a>
    <ul class="nav-dropdown-items">
        {{-- @include('vendor.backpack.base.inc.sidebar-item', [
            'icon' => 'fas fa-folder-open',
            'url' => backpack_url('elfinder'),
            'label' => trans('backpack::crud.file_manager')
        ]) --}}
        @include('vendor.backpack.base.inc.sidebar-item', [
            'icon' => 'fas fa-users',
            'url' => backpack_url('user'),
            'label' => 'Utilisateurs'
        ])
        @include('vendor.backpack.base.inc.sidebar-item', [
            'icon' => 'fas fa-tags',
            'url' => backpack_url('role'),
            'label' => 'Rôles'
        ])
        @include('vendor.backpack.base.inc.sidebar-item', [
            'icon' => 'fas fa-key',
            'url' => backpack_url('permission'),
            'label' => 'Permissions'
        ])
    </ul>
</li>

<li class='nav-item nav-dropdown'>
    <a
        class='nav-link nav-dropdown-toggle'
        href="#"
    >
        <i class='nav-icon fas fa-tags'></i>
        Dépendances
    </a>
    <ul class="nav-dropdown-items">
        @include('vendor.backpack.base.inc.sidebar-item', [
            'icon' => 'fas fa-tags',
            'url' => backpack_url('tags'),
            'label' => 'Tags'
        ])
        @include('vendor.backpack.base.inc.sidebar-item', [
            'icon' => 'fas fa-user-md',
            'url' => backpack_url('metiers'),
            'label' => 'Métiers'
        ])
        @include('vendor.backpack.base.inc.sidebar-item', [
            'icon' => 'fas fa-newspaper',
            'url' => backpack_url('editors'),
            'label' => 'Éditeurs'
        ])
    </ul>
</li>

<li class="nav-title">
    Contenus
</li>
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-code',
    'url' => backpack_url('skills'),
    'label' => 'Compétences'
])
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-tags',
    'url' => backpack_url('categories'),
    'label' => 'Catégories'
])
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-graduation-cap',
    'url' => backpack_url('formations'),
    'label' => 'Formations'
])
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-heart',
    'url' => backpack_url('passions'),
    'label' => 'Passions'
])

<li class="nav-title">
    Contacts
</li>
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-share-alt',
    'url' => backpack_url('socials'),
    'label' => "Réseaux sociaux"
])
<li class="nav-title">
    Offres d'emploi
</li>
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-align-left',
    'url' => backpack_url('texts'),
    'label' => 'Textes'
])
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-photo-video',
    'url' => backpack_url('medias'),
    'label' => 'Médias'
])
<li class="nav-title">
    Offres d'emploi
</li>
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-folder',
    'url' => backpack_url('projects'),
    'label' => 'Projets'
])
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-book',
    // 'url' => backpack_url('media'),
    'label' => 'Connaissances'
])
@include('vendor.backpack.base.inc.sidebar-item', [
    'icon' => 'fas fa-clone',
    // 'url' => backpack_url('media'),
    'label' => 'Contenus'
])