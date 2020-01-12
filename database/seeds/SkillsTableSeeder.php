<?php

use Illuminate\Database\Seeder;

use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::insert([
            [
                'title' => 'PHP 7',
                'subtitle' => '',
                'details' => "Un de mes langages préférés, il revient de loin mais il a su se mettre à jour avec les années. Il est moins permissif que le JavaScript mais il reste très pratique pour la partie back d'une application",
                'favorite' => true,
                'category_id' => 1,
            ],
            [
                'title' => 'HTML 5',
                'subtitle' => '',
                'details' => "La base du développement web mais encore faut-il utiliser les tag de manière efficience pour le SEO",
                'favorite' => false,
                'category_id' => 1,
            ],
            [
                'title' => 'CSS 3',
                'subtitle' => '',
                'details' => "À travers SASS, c'est un des constituant de base dans le développement front",
                'favorite' => false,
                'category_id' => 1,
            ],
            [
                'title' => 'SASS / SCSS',
                'subtitle' => '',
                'details' => "Vital pour développer du CSS avec de l'héritage et des variables",
                'favorite' => true,
                'category_id' => 1,
            ],
            [
                'title' => 'JavaScript',
                'subtitle' => '',
                'details' => "La base aujourd'hui dans le développement web, s'utilise partout et sous toutes les formes. Tout développement front-end passe forcément par ce langage",
                'favorite' => true,
                'category_id' => 1,
            ],
            [
                'title' => 'TypeScript',
                'subtitle' => '',
                'details' => "Le renouveau du JavaScript même si l'ecmascript moderne est déjà bien pratique à utiliser",
                'favorite' => false,
                'category_id' => 1,
            ],
            [
                'title' => 'MySQL / MariaDB',
                'subtitle' => '',
                'details' => "Un langage efficace pour gérer ses bases de données, simple et efficace",
                'favorite' => true,
                'category_id' => 1,
            ],
            [
                'title' => 'SQL Server',
                'subtitle' => '',
                'details' => "Des bases mais je préfère l'open-source",
                'favorite' => false,
                'category_id' => 1,
            ],
            [
                'title' => 'Java 8',
                'subtitle' => '',
                'details' => "Un langage côté serveur historique qui fait encore ses preuves aujourd'hui autant pour le web que pour les clients lourds",
                'favorite' => false,
                'category_id' => 1,
            ],
            [
                'title' => 'Shell',
                'subtitle' => '',
                'details' => "Indispensable pour développer sous Linux, la connaissance du Shell permet d'utiliser le terminal et de réaliser une mise en prod rapidement",
                'favorite' => true,
                'category_id' => 1,
            ],
            [
                'title' => 'LaTeX',
                'subtitle' => '',
                'details' => "Très élégant pour réaliser des dossiers ou des livres, LaTeX offre des possibilités intéressantes pour réaliser un rendu de qualité",
                'favorite' => false,
                'category_id' => 1,
            ],
            [
                'title' => 'Laravel 6',
                'subtitle' => 'Framework PHP',
                'details' => "Mon framework préféré, la puissance d'Eloquent permet d'avoir un ORM très efficace et agréable à utiliser, les migrations permettent de réaliser une base de données simplement et effiacement... de quoi avoir rapidement une API fonctionnelle. Blade permet aussi de faire quelques petits sites web qui n'ont pas besoin d'une partie front avec un framework JS",
                'favorite' => true,
                'category_id' => 2,
            ],
            [
                'title' => 'Backpack 4',
                'subtitle' => 'Librairie PHP pour back-office',
                'details' => "Couplé à Laravel, cela permet de gérer un back-office rapidement et efficacement sans perdre de temps, efficace pour la plupart des sites web",
                'favorite' => true,
                'category_id' => 2,
            ],
            [
                'title' => 'Bootstrap 4 / Bootstrap Vue',
                'subtitle' => 'Librairie CSS',
                'details' => "Un peu classique et plus vraiment à la mode pour le design mais ses classes utilitaires sont agréables en développement",
                'favorite' => true,
                'category_id' => 2,
            ],
            [
                'title' => 'Materialize / Vuetify',
                'subtitle' => 'Librairie CSS',
                'details' => "Très agréable, autant en développement que visuellement",
                'favorite' => true,
                'category_id' => 2,
            ],
            [
                'title' => 'jQuery 3',
                'subtitle' => 'Librairie  JS',
                'details' => "Une librairie JS un peu lourde qui simplifie le code au prix d'une dépendance. Si je peux m'en passer, je le fais",
                'favorite' => false,
                'category_id' => 2,
            ],
            [
                'title' => 'VueJS / NuxtJS',
                'subtitle' => 'Framework JS',
                'details' => 'Une vraie petite merveille pour le côté front-end et développer en composants, la syntaxe des extensions vue est très agréable',
                'favorite' => true,
                'category_id' => 2,
            ],
            [
                'title' => 'Angular 8',
                'subtitle' => 'Framework TS',
                'details' => 'Notions de bases, je trouve ce framework un peu lourd',
                'favorite' => false,
                'category_id' => 2,
            ],
            [
                'title' => 'ReactJS',
                'subtitle' => 'Framework JS',
                'details' => 'Notions de bases, je lui préfère VueJS qui est plus instinctif à utiliser',
                'favorite' => false,
                'category_id' => 2,
            ],
            [
                'title' => 'Wordpress',
                'subtitle' => 'CMS',
                'details' => 'Un CMS, ça peut toujours être utile',
                'favorite' => false,
                'category_id' => 2,
            ],
            [
                'title' => 'GIT',
                'subtitle' => 'Logiciel de versions',
                'details' => 'Vital pour développer efficacement entre plusieurs utilisateurs ou même pour soi-même afin de pouvoir revenir à des versions plus anciennes ou forker son projet',
                'favorite' => true,
                'category_id' => 3,
            ],
            [
                'title' => 'Visual Studio Code',
                'subtitle' => 'IDE',
                'details' => "Un IDE pratique et léger avec des extensions efficaces, très cool pour développer du front !",
                'favorite' => true,
                'category_id' => 3,
            ],
            [
                'title' => 'PhpStorm',
                'subtitle' => 'IDE',
                'details' => "Un IDE puissant pour développer du back-end avec des frameworks comme Laravel",
                'favorite' => false,
                'category_id' => 3,
            ],
            [
                'title' => 'GitKraken',
                'subtitle' => 'Interface graphique pour git',
                'details' => "Gérer ses repos comme une pro !",
                'favorite' => false,
                'category_id' => 3,
            ],
            [
                'title' => 'phpMyAdmin',
                'subtitle' => 'Interface graphique pour les bases de données',
                'details' => "Un très bon outil pour gérer ses bases de données, c'est plus agréable qu'en ligne de commande",
                'favorite' => true,
                'category_id' => 3,
            ],
            [
                'title' => 'Photoshop CS6',
                'subtitle' => "Logiciel de retouche d'images",
                'details' => "Si j'ai une licence disponible sinon GIMP fonctionne très bien",
                'favorite' => false,
                'category_id' => 3,
            ],
            [
                'title' => 'GIMP',
                'subtitle' => "Logiciel de retouche d'images",
                'details' => 'Quand il faut retravailler les images de la maquette',
                'favorite' => false,
                'category_id' => 3,
            ],
            [
                'title' => 'Office',
                'subtitle' => 'Bureautique',
                'details' => 'Pour écrire des rapport',
                'favorite' => false,
                'category_id' => 3,
            ],
            [
                'title' => 'Discord',
                'subtitle' => "Logiciel de VoIP",
                'details' => "En milieu professionnel, c'est aussi bien que Slack pour s'échanger des messages ou du code... et le markdown si agréable à utiliser",
                'favorite' => true,
                'category_id' => 3,
            ],
            [
                'title' => 'Français',
                'subtitle' => '',
                'details' => 'Langue natale',
                'favorite' => true,
                'category_id' => 4,
            ],
            [
                'title' => 'Anglais',
                'subtitle' => '',
                'details' => 'Avec les séries et les jeux vidéo, un niveau suffisant pour comprendre les posts de StackOverflow',
                'favorite' => true,
                'category_id' => 4,
            ],
            [
                'title' => 'Espagnol',
                'subtitle' => '',
                'details' => 'Des bases du lycée comme tout le monde : <i>¿ cómo está usted ?</i>',
                'favorite' => false,
                'category_id' => 4,
            ],
        ]);
    }
}
