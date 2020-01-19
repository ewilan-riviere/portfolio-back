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
                'title' => 'PHP',
                'version' => '7',
                'link' => 'https://www.php.net/',
                'is_free_app' => true,
                'color' => '#8993be',
                'color_text_dark' => false,
                'subtitle' => 'Langage serveur',
                'details' => "Un de mes langages préférés, il revient de loin mais il a su se mettre à jour avec les années. Il est moins permissif que le JavaScript mais il reste très pratique pour la partie back d'une application",
                'is_favorite' => true,
                'image' => 'storage/skills/php.png',
                'blockquote_text' => 'Maman ! Es-tu sûre que cette ligne de code est fini bien par un point virgule ? Tout cela me plonge dans la perplexité.',
                'blockquote_who' => 'Tantor, un éléphant méfiant',
                'category_id' => 1,
            ],
            [
                'title' => 'HTML / CSS',
                'version' => '5 / 3',
                'link' => null,
                'is_free_app' => true,
                'color' => '#264de4',
                'color_text_dark' => false,
                'subtitle' => 'Langage de base pour le web',
                'details' => "La base du développement web mais encore faut-il utiliser les tag de manière efficience pour le SEO / À travers SASS, c'est un des constituant de base dans le développement front",
                'is_favorite' => true,
                'image' => 'storage/skills/html-css.png',
                'blockquote_text' => "Il y a ceux qui utilise des balises selon le contenu concerné et il y a les autres qui mettent des balises div à tout va.",
                'blockquote_who' => "Shepard Edwin Oaklee, journaliste spécialisé",
                'category_id' => 1,
            ],
            [
                'title' => 'Apache2 / NGINX',
                'version' => '',
                'link' => 'https://www.nginx.com/resources/wiki/',
                'is_free_app' => true,
                'color' => '#009639',
                'color_text_dark' => false,
                'subtitle' => 'Serveur HTTP',
                'details' => "Pour la mise en production, les VirtualHosts... la pierre angulaire d'Internet",
                'is_favorite' => true,
                'image' => 'storage/skills/apache-nginx.png',
                'blockquote_text' => "Quand le dernier back-office donnera une 404 - Quand la dernier serveur de prod sera tombé  - Quand le dernier développeur aura fini en burn-out - Alors on saura que le client est allé trop loin.",
                'blockquote_who' => 'Geronimo, lead-chef du développement de serveur web',
                'category_id' => 3,
            ],
            [
                'title' => 'SASS / SCSS',
                'version' => '',
                'link' => 'https://sass-lang.com/',
                'is_free_app' => true,
                'color' => '#cc6699',
                'color_text_dark' => false,
                'subtitle' => 'Langage de préprocesseur de CSS',
                'details' => "Vital pour développer du CSS avec de l'héritage et des variables",
                'is_favorite' => true,
                'image' => 'storage/skills/sass.png',
                'blockquote_text' => "Ce qui est sensas c'est paradoxalement d'utiliser du SASS",
                'blockquote_who' => 'Anonyme',
                'category_id' => 1,
            ],
            [
                'title' => 'JavaScript',
                'version' => '',
                'link' => null,
                'is_free_app' => true,
                'color' => '#f0db4f',
                'color_text_dark' => true,
                'subtitle' => 'Langage de front et de back',
                'details' => "La base aujourd'hui dans le développement web, s'utilise partout et sous toutes les formes. Tout développement front-end passe forcément par ce langage",
                'is_favorite' => true,
                'image' => 'storage/skills/js.png',
                'blockquote_text' => "Ces écritures... serait-ce un dialecte Jawa ?",
                'blockquote_who' => "Un archéologue d'une époque lointaine, très lointaine",
                'category_id' => 1,
            ],
            [
                'title' => 'TypeScript',
                'version' => '',
                'link' => 'https://www.typescriptlang.org/',
                'is_free_app' => true,
                'color' => '#007acc',
                'color_text_dark' => false,
                'subtitle' => 'Langage  de sur-ensemble de JavaScript',
                'details' => "Le renouveau du JavaScript même si l'ecmascript moderne est déjà bien pratique à utiliser",
                'is_favorite' => false,
                'image' => 'storage/skills/typescript.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 1,
            ],
            [
                'title' => 'MySQL / MariaDB',
                'version' => '',
                'link' => 'https://mariadb.org/',
                'is_free_app' => true,
                'color' => '#00618a',
                'color_text_dark' => false,
                'subtitle' => 'Système de gestion de base de données',
                'details' => "Un langage efficace pour gérer ses bases de données, simple et efficace",
                'is_favorite' => true,
                'image' => 'storage/skills/mysql-mariadb.png',
                'blockquote_text' => "Utilisant des dauphins pour stocker des données à long terme, le fondateur de MySQL Michael dû finalement revendre son projet à Sun Maxizoo devant le scandale que le traitement des dauphins provoquait. Adoptant une conscience écologique, il décida d'apprivoiser des otaries pour stoker à nouveau des données mais cette fois-ci en respectant leurs besoins...",
                'blockquote_who' => "Extrait d'un journal spécialisé",
                'category_id' => 1,
            ],
            [
                'title' => 'SQL Server',
                'version' => '',
                'link' => null,
                'is_free_app' => false,
                'color' => '#dd3127',
                'color_text_dark' => false,
                'subtitle' => 'Système de gestion de base de données',
                'details' => "Des bases mais je préfère l'open-source",
                'is_favorite' => false,
                'image' => 'storage/skills/sql-server.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 1,
            ],
            [
                'title' => 'Java',
                'version' => '8',
                'link' => 'https://www.java.com/fr/',
                'is_free_app' => true,
                'color' => '#f89820',
                'color_text_dark' => false,
                'subtitle' => 'Langage serveur',
                'details' => "Un langage côté serveur historique qui fait encore ses preuves aujourd'hui autant pour le web que pour les clients lourds",
                'is_favorite' => false,
                'image' => 'storage/skills/java.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 1,
            ],
            [
                'title' => 'Bash',
                'version' => 'bash, zsh',
                'link' => null,
                'is_free_app' => true,
                'color' => '#33ff00',
                'color_text_dark' => true,
                'subtitle' => 'Interface système de Linux',
                'details' => "Indispensable pour développer sous Linux, la connaissance du Shell permet d'utiliser le terminal et de réaliser une mise en prod rapidement",
                'is_favorite' => true,
                'image' => 'storage/skills/terminal.png',
                'blockquote_text' => 
                "- Est ce que c'est... ?
                <br/>
                - Le shell ? Oui.
                <br/>
                - Et vous le regardez toujours en ligne de commande ?
                <br/>
                - Oui, faut bien, les interfaces graphiques prennent trop de ressources pour le programme. Et il y a beaucoup trop d'information à interpréter dans le shell.",
                'blockquote_who' => 
                "Le linuxien élu, devant un terminal",
                'category_id' => 1,
            ],
            [
                'title' => 'LaTeX',
                'version' => '',
                'link' => null,
                'is_free_app' => true,
                'color' => '#000000',
                'color_text_dark' => false,
                'subtitle' => 'Système de composition de documents',
                'details' => "Très élégant pour réaliser des dossiers ou des livres, LaTeX offre des possibilités intéressantes pour réaliser un rendu de qualité",
                'is_favorite' => false,
                'image' => 'storage/skills/latex.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 1,
            ],
            [
                'title' => 'Laravel',
                'version' => '6',
                'link' => 'https://laravel.com/',
                'is_free_app' => true,
                'color' => '#fb503b',
                'color_text_dark' => true,
                'subtitle' => 'Framework PHP',
                'details' => "Mon framework préféré, la puissance d'Eloquent permet d'avoir un ORM très efficace et agréable à utiliser, les migrations permettent de réaliser une base de données simplement et effiacement... de quoi avoir rapidement une API fonctionnelle. Blade permet aussi de faire quelques petits sites web qui n'ont pas besoin d'une partie front avec un framework JS",
                'is_favorite' => true,
                'image' => 'storage/skills/laravel.png',
                'blockquote_text' => 
                "Château mythique des contrées de phpia, Cair Laravel est le lieu d'où les monarques du Back gouvernent avec application le royaume du serveur.",
                'blockquote_who' => "Carolina S. L., autrice de : Une histoire du Back à travers les âges",
                'category_id' => 2,
            ],
            [
                'title' => 'Backpack',
                'version' => '4',
                'link' => 'https://backpackforlaravel.com/',
                'is_free_app' => true,
                'color' => '#605ca8',
                'color_text_dark' => false,
                'subtitle' => 'Librairie PHP pour back-office',
                'details' => "Couplé à Laravel, cela permet de gérer un back-office rapidement et efficacement sans perdre de temps, efficace pour la plupart des sites web",
                'is_favorite' => true,
                'image' => 'storage/skills/backpack.png',
                'blockquote_text' => "Permet de transporter efficacement vos données dans tous vos déplacement de framework, tout ce que vous y mettrez sera protégé de l'humidité, classé et vous disposerez d'une place quasiment illimitée. Vous disposerez aussi d'un index répertoriant tout ce qui y est stocké. Ainsi toute personne ayant les droits d'accès pourra gérer les informations qui s'y trouvent.",
                'blockquote_who' => "Notice d'utilisation",
                'category_id' => 2,
            ],
            [
                'title' => 'Bootstrap / Bootstrap Vue',
                'version' => '4.3',
                'link' => 'https://bootstrap-vue.js.org/',
                'is_free_app' => true,
                'color' => '#563d7c',
                'color_text_dark' => false,
                'subtitle' => 'Librairie CSS',
                'details' => "Un peu classique et plus vraiment à la mode pour le design mais ses classes utilitaires sont agréables en développement",
                'is_favorite' => true,
                'image' => 'storage/skills/bootstrap.png',
                'blockquote_text' => "Avant Bootstrap, il n'y avait rien. Les développeurs pensent que le code a dû rebooter sur lui-même avant de renaître et de produire ce qu'on appelle le « Big boot » qui a généré des milliers de lignes de code primitif qui ont pu former les grands langages actuels des milliards d'années plus tard. Bootstrap semble être lié au rayonnement lointain, une forme de bruit de fond sur Internet qui semble provenir du début des langages...",
                'blockquote_who' => "Bootstrap, ou le big boot, documentaire sur l'origine des langages",
                'category_id' => 2,
            ],
            [
                'title' => 'Materialize / Vuetify',
                'version' => '2.2',
                'link' => 'https://vuetifyjs.com/',
                'is_free_app' => true,
                'color' => '#1867c0',
                'color_text_dark' => false,
                'subtitle' => 'Librairie CSS',
                'details' => "Très agréable, autant en développement que visuellement",
                'is_favorite' => true,
                'image' => 'storage/skills/materialize-vuetify.png',
                'blockquote_text' => "Le matérialisme est un véritable obstacle épistémologique pour Auguste Comte, il caractérise avant tout l’attitude consistant à ramener l’analyse de phénomènes à une causalité absolue...",
                'blockquote_who' => "Erreur, entrée non valide",
                'category_id' => 2,
            ],
            [
                'title' => 'jQuery',
                'version' => '3',
                'link' => 'https://jquery.com/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'Librairie  JS',
                'details' => "Une librairie JS un peu lourde qui simplifie le code au prix d'une dépendance. Si je peux m'en passer, je le fais",
                'is_favorite' => false,
                'image' => 'storage/skills/jquery.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 2,
            ],
            [
                'title' => 'VueJS / NuxtJS',
                'version' => '2.6 / 2.1',
                'link' => 'https://vuejs.org/',
                'is_free_app' => true,
                'color' => '#41b883',
                'color_text_dark' => false,
                'subtitle' => 'Framework JS',
                'details' => 'Une vraie petite merveille pour le côté front-end et développer en composants, la syntaxe des extensions vue est très agréable',
                'is_favorite' => true,
                'image' => 'storage/skills/nuxt-vue.png',
                'blockquote_text' => "Avez-vous déjà vu... un développeur back sur un framework JS ?",
                'blockquote_who' => "Le narrateur lui-même",
                'category_id' => 2,
            ],
            [
                'title' => 'Angular',
                'version' => '8',
                'link' => 'https://angular.io/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'Framework TS',
                'details' => 'Notions de bases, je trouve ce framework un peu lourd',
                'is_favorite' => false,
                'image' => 'storage/skills/angular.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 2,
            ],
            [
                'title' => 'ReactJS',
                'version' => '16',
                'link' => 'https://reactjs.org/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'Framework JS',
                'details' => 'Notions de bases, je lui préfère VueJS qui est plus instinctif à utiliser',
                'is_favorite' => false,
                'image' => 'storage/skills/reactjs.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 2,
            ],
            [
                'title' => 'Wordpress',
                'version' => '',
                'link' => 'https://wordpress.com/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'CMS',
                'details' => 'Un CMS, ça peut toujours être utile',
                'is_favorite' => false,
                'image' => 'storage/skills/wordpress.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 2,
            ],
            [
                'title' => 'git',
                'version' => '',
                'link' => 'https://git-scm.com/',
                'is_free_app' => true,
                'color' => '#de4c36',
                'color_text_dark' => true,
                'subtitle' => 'Logiciel de versions',
                'details' => 'Vital pour développer efficacement entre plusieurs utilisateurs ou même pour soi-même afin de pouvoir revenir à des versions plus anciennes ou forker son projet',
                'is_favorite' => true,
                'image' => 'storage/skills/git.png',
                'blockquote_text' => 'Parler coûte peu. Montrez-moi le code source.',
                'blockquote_who' => 'Linus Torvalds, un gars qui passait par là',
                'category_id' => 3,
            ],
            [
                'title' => 'Visual Studio Code',
                'version' => '',
                'link' => 'https://code.visualstudio.com/',
                'is_free_app' => true,
                'color' => '#007acc',
                'color_text_dark' => false,
                'subtitle' => 'IDE',
                'details' => "Un IDE pratique et léger avec des extensions efficaces, très cool pour développer du front !",
                'is_favorite' => true,
                'image' => 'storage/skills/vs-code.png',
                'blockquote_text' => "Le seul problème à propos de Microsoft est qu'ils n'avaient pas de goût... Ils n'avaient pas d'originalité... Ils créaient des produits de troisième catégorie. Jusqu'à ce que...",
                'blockquote_who' => "Steve, un utilisateur convaincu de Mac se posant des questions",
                'category_id' => 3,
            ],
            [
                'title' => 'PhpStorm',
                'version' => '',
                'link' => 'https://www.jetbrains.com/fr-fr/phpstorm/',
                'is_free_app' => false,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'IDE',
                'details' => "Un IDE puissant pour développer du back-end avec des frameworks comme Laravel",
                'is_favorite' => false,
                'image' => 'storage/skills/phpstorm.png',
                'blockquote_text' => "",
                'blockquote_who' => null,
                'category_id' => 3,
            ],
            [
                'title' => 'GitKraken',
                'version' => '',
                'link' => 'https://www.gitkraken.com/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'Interface graphique pour git',
                'details' => "Gérer ses repos comme une pro !",
                'is_favorite' => false,
                'image' => 'storage/skills/gitkraken.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 3,
            ],
            [
                'title' => 'phpMyAdmin',
                'version' => '5.0',
                'link' => 'https://www.phpmyadmin.net/',
                'is_free_app' => true,
                'color' => '#ff9800',
                'color_text_dark' => true,
                'subtitle' => 'Interface graphique de gestion de base de données',
                'details' => "Un très bon outil pour gérer ses bases de données, c'est plus agréable qu'en ligne de commande",
                'is_favorite' => true,
                'image' => 'storage/skills/phpmyadmin.png',
                'blockquote_text' => 
                "- On va voler des fichiers ? Ces fichiers ?
                <br/>
                - Hacker. On « hack » cette « base de données », termes informatiques.",
                'blockquote_who' => "Deux hackers en devenir et en fuite",
                'category_id' => 3,
            ],
            [
                'title' => 'Photoshop',
                'version' => 'CS6',
                'link' => 'https://www.adobe.com/fr/products/photoshop.html',
                'is_free_app' => false,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => "Logiciel de retouche d'images",
                'details' => "Si j'ai une licence disponible sinon GIMP fonctionne très bien",
                'is_favorite' => false,
                'image' => 'storage/skills/photoshop.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 3,
            ],
            [
                'title' => 'GIMP',
                'version' => '',
                'link' => 'https://www.gimp.org/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => "Logiciel de retouche d'images",
                'details' => 'Quand il faut retravailler les images de la maquette',
                'is_favorite' => false,
                'image' => 'storage/skills/gimp.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 3,
            ],
            [
                'title' => 'Office',
                'version' => '',
                'link' => 'https://www.office.com/',
                'is_free_app' => false,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'Bureautique',
                'details' => 'Pour écrire des rapport',
                'is_favorite' => false,
                'image' => 'storage/skills/office.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 3,
            ],
            [
                'title' => 'Discord',
                'version' => '',
                'link' => 'https://discordapp.com/',
                'is_free_app' => true,
                'color' => '#7289da',
                'color_text_dark' => false,
                'subtitle' => "Logiciel de VoIP",
                'details' => "En milieu professionnel, c'est aussi bien que Slack pour s'échanger des messages ou du code... et le markdown si agréable à utiliser",
                'is_favorite' => true,
                'image' => 'storage/skills/discord.png',
                'blockquote_text' => "Les gamers veulent la concorde, mais Internet sait mieux qu'eux ce qui est bon pour ces gens : il leur a donné Discord.",
                'blockquote_who' => 'Manuel Kant, philosophe des temps modernes',
                'category_id' => 3,
            ],
            [
                'title' => 'Français',
                'version' => 'contemporaine',
                'link' => null,
                'is_free_app' => false,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => '',
                'details' => 'Langue natale',
                'is_favorite' => true,
                'image' => 'storage/skills/francais.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 4,
            ],
            [
                'title' => 'Anglais',
                'version' => 'contemporaine',
                'link' => null,
                'is_free_app' => false,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => '',
                'details' => 'Avec les séries et les jeux vidéo, un niveau suffisant pour comprendre les posts de StackOverflow',
                'is_favorite' => true,
                'image' => 'storage/skills/anglais.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 4,
            ],
            [
                'title' => 'Espagnol',
                'version' => 'contemporaine',
                'link' => null,
                'is_free_app' => false,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => '',
                'details' => 'Des bases du lycée comme tout le monde : <i>¿ cómo está usted ?</i>',
                'is_favorite' => false,
                'image' => 'storage/skills/espagnol.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 4,
            ],
            [
                'title' => 'NodeJS',
                'version' => '11.15',
                'link' => 'https://nodejs.org/en/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'Plateforme logicielle',
                'details' => "",
                'is_favorite' => false,
                'image' => 'storage/skills/nodejs.png',
                'blockquote_text' => "Par mes actions, je t'honore. V8.",
                'blockquote_who' => "Slit, un DevBoy émérite",
                'category_id' => 3,
            ],
            [
                'title' => 'npm / yarn',
                'version' => '6.7 / 1.2',
                'link' => 'https://yarnpkg.com/lang/en/',
                'is_free_app' => true,
                'color' => '#368fb9',
                'color_text_dark' => false,
                'subtitle' => 'Gestionnaire de paquets',
                'details' => "",
                'is_favorite' => true,
                'image' => 'storage/skills/npm-yarn.png',
                'blockquote_text' => "Mraaoouuw ?",
                'blockquote_who' => "mon chat devant yarn en action",
                'category_id' => 3,
            ],
            [
                'title' => 'Composer',
                'version' => '1.9',
                'link' => 'https://getcomposer.org/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'Gestionnaire de paquets',
                'details' => "",
                'is_favorite' => true,
                'image' => 'storage/skills/composer.png',
                'blockquote_text' => "Le plus nécessaire et le plus difficile dans les dépendances c'est de les télécharger",
                'blockquote_who' => "Wolfgang Amadeus, un développeur de symphonies",
                'category_id' => 3,
            ],
            [
                'title' => 'Symfony',
                'version' => '4',
                'link' => 'https://symfony.com/',
                'is_free_app' => true,
                'color' => '#',
                'color_text_dark' => false,
                'subtitle' => 'Framework PHP',
                'details' => "Notions de bases, je l'ai peu expérimenté et de fait, lui préfère Laravel",
                'is_favorite' => false,
                'image' => 'storage/skills/symfony.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 2,
            ],
            [
                'title' => 'Markdown',
                'version' => '',
                'link' => null,
                'is_free_app' => false,
                'color' => '#000000',
                'color_text_dark' => false,
                'subtitle' => 'Langage de balisage',
                'details' => "Très pratique pour faire rapidement un document comme un readme",
                'is_favorite' => false,
                'image' => 'storage/skills/markdown.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 1,
            ],
            [
                'title' => 'Windows',
                'version' => '10',
                'link' => null,
                'is_free_app' => false,
                'color' => '#0078d6',
                'color_text_dark' => false,
                'subtitle' => "Système d'exploitation",
                'details' => "Système propriétaire que je n'utilise que lorsque je n'ai pas le choix",
                'is_favorite' => false,
                'image' => 'storage/skills/windows.png',
                'blockquote_text' => null,
                'blockquote_who' => null,
                'category_id' => 3,
            ],
            [
                'title' => 'Linux',
                'version' => 'Debian 10, Ubuntu 18.14',
                'link' => null,
                'is_free_app' => true,
                'color' => '#000000',
                'color_text_dark' => false,
                'subtitle' => "Système d'exploitation",
                'details' => "Flexible, libre et disposant de multiples interfaces graphiques et distribution, Linux est un système permettant de configurer son PC exactement comme on le souhaite, avec une communauté vivante et dynamique",
                'is_favorite' => true,
                'image' => 'storage/skills/linux.png',
                'blockquote_text' => "Le manuel disait « Nécessite Windows XP ou mieux ». J’ai donc installé Linux.",
                'blockquote_who' => 'Un utilisateur sage et pertinent',
                'category_id' => 3,
            ],
        ]);
    }
}
