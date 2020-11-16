<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Text::insert([
            [
                'slug' => 'dev-resume',
                'text' => "Jeune <b>développeuse orientée back-end</b> à l'origine, j'apprécie le <b>PHP</b> utilisé <b>avec Laravel</b>, en respectant le <b>MVC</b>, pour créer des <b>API</b> séparées de la partie front-end ou des sites web mineurs avec du <b>Blade</b>.
                <br/><br/>
                Je ne sous-estime pas pour autant l'importance du <b>front-end</b> qui est plus agréable à développer avec un <b>framework JS</b>, c'est pourquoi je développe le front-end de sites plus conséquents avec <b>VueJS</b> couplé à <b>NuxtJS</b> pour obtenir une application découpée en <b>composants</b> ayant un côté client et un côté serveur permettant une mise en production efficace. Ces technologies demandent une connaissance du <b>JavaScript/TypeScript</b> et du <b>SCSS</b>.
                <br/><br/>
                La maîtrise de toute la chaîne de développement est importante pour moi, j'apprécie avoir la main sur le code du début à la fin avec un dépôt <b>Git</b>, un accès au serveur de recette afin de mettre en place une pré-prod dès le début du développement afin d'automatiser le <b>déploiement</b> de l'application avec <b>NGINX</b> et <b>PM2</b>.
                <br/><br/>
                Je <b>développe mieux en groupe</b>, privilégiant la <b>communication et l'entraide</b> au développement isolé, tant que j'ai des collègues qui apprécient également cette manière de travailler. J'ai l'habitude de <b>travailler sous Linux</b> et de <b>m'occuper de tous les problèmes d'installation</b> avec des scripts Shell et si je n'ai pas la réponse, je la recherche activement.
                <br/><br/>
                J'aime <b>finir un travail</b> et limiter au maximum le nombre de bugs, ce qui me pousse à y revenir jusqu'à ce qu'à ce que je puisse le mettre en production et que j'en sois satisfaite.",
            ],
            [
                'slug' => 'dev-name',
                'text' => 'Ewilan Rivière',
            ],
            [
                'slug' => 'dev-title',
                'text' => 'Développeuse web, web mobile',
            ],
            [
                'slug' => 'dev-spec',
                'text' => 'Orientée full-stack : VueJS (JS/TS) & Laravel (PHP)',
            ],
            [
                'slug' => 'dev-level',
                'text' => 'Bac +2',
            ],
            [
                'slug' => 'dev-professional',
                'text' => "En alternance à <a href='https://www.useweb.fr/' target='_blank'>UseWeb</a> avec l'<a href='https://www.eni-ecole.fr/' target='_blank'>ENI</a> pour le <a href='https://www.eni-ecole.fr/formation/concepteur-rice-developpeur-euse-dapplications' target='_blank'>bac +4</a>",
            ],
        ]);
    }
}
