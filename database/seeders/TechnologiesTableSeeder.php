<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::insert([
            [
                'name'         => 'laravel',
                'display_name' => 'Laravel',
                'displaying'   => '<b>Laravel 5.8</b><br><i>Models</i>, <i>Vues</i>, <i>Controllers</i><br>Blade <i class="fas fa-heart"></i> forever<br>Un de mes <i>frameworks</i> préféré !',
                'logo'         => 'fab fa-laravel',
            ],
            [
                'name'         => 'git',
                'display_name' => 'git',
                'displaying'   => 'Travailler en équipe <i>#merge</i><br>Toujours avoir accès à ses projets<br>Le grand kraken <i class="fab fa-gitkraken"></i> veille sur les branchs<br>Vital pour coder et partager',
                'logo'         => 'fab fa-git',
            ],
            [
                'name'         => 'sass',
                'display_name' => 'SASS',
                'displaying'   => 'Faire du style <i>avec style</i><br>Des variables partout ! Des opérateurs !<br>Plus simple à utiliser 😌<br>De l\'héritage = la vie',
                'logo'         => 'fab fa-sass',
            ],
            [
                'name'         => 'jquery',
                'display_name' => 'jQuery',
                'displaying'   => '<b>jQuery 3.4</b><br>Des fonctions intégrées plus puissantes<br>Du JavaScript <i class="devicon-javascript-plain"></i> plus simplifié<br>Plus gourmand mais plus agréable',
                'logo'         => 'devicon-jquery-plain',
            ],
            [
                'name'         => 'bootstrap',
                'display_name' => 'Bootstrap',
                'displaying'   => '<b>Bootstrap 4.3</b><br>Des classes utiles accessibles et du <i>responsive</i><br>Donne un style <i class="fas fa-object-group"></i> agréable rapidement<br>Un peu lourd mais toujours intéressant',
                'logo'         => 'fab fa-bootstrap',
            ],
            [
                'name'         => 'php',
                'display_name' => 'PHP',
                'displaying'   => '<b>PHP 7</b><br>Un puissant langage serveur<br>Associé avec Laravel <i class="fab fa-laravel"></i><br>Générer l\'HTML <i>#foreach</i> et gérer toutes les situations <i>#if #else</i>',
                'logo'         => 'fab fa-php',
            ],
            [
                'name'         => 'java',
                'display_name' => 'Java',
                'displaying'   => '<b>Java 8</b><br><br><br>',
                'logo'         => 'devicon-java-plain',
            ],
            [
                'name'         => 'linux',
                'display_name' => 'Linux',
                'displaying'   => '<b>Ubuntu / Debian</b><br>Un système modifiable et parfait pour apprendre<br>Des paquets <i class="fas fa-box"></i> par milliers !<br>Des alternatives libres et souvent plus puissantes',
                'logo'         => 'fab fa-linux',
            ],
            [
                'name'         => 'bash',
                'display_name' => 'Bash',
                'displaying'   => 'Terminal & zsh<br>Des scripts pour automatiser des actions<br>Une navigation <i class="fab fa-galactic-senate"></i> <i>« plus facile, plus rapide, plus séduisant »</i><br>Regarde ça fait comme dans Matrix !',
                'logo'         => 'fas fa-terminal',
            ],
        ]);
    }
}
