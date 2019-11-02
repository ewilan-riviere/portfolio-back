<?php

use Illuminate\Database\Seeder;

use App\Models\Information;

class InformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::insert([
            [
                'slug' => '',
                'text' => ''
            ],
            [
                'slug' => 'dev_resume',
                'text' => 'Jeune <b>développeuse orientée back-end</b>, j\'apprécie <b>PHP, Laravel, git</b> mais aussi l\'expérience utilisateur, ce qui me pousse à garder un lien avec le front-end.<br><br>Je <b>développe mieux en groupe</b>, privilégiant la <b>communication et l\'entraide</b> au développement isolé, tant que j\'ai des collègues qui apprécient également cette manière de travailler.<br><br>J\'ai l\'habitude de <b>travailler sous Linux</b> et de <b>m\'occuper de tous les problèmes d\'installation</b> avec des scripts Shell et si je n\'ai pas la réponse, je la recherche activement.<br><br>J\'aime <b>finir un travail</b> et limiter au maximum le nombre de bugs, ce qui me pousse à y revenir jusqu\'à ce qu\'à ce que je puisse le mettre en production et que j\'en sois satisfaite.'
            ],
            [
                'slug' => 'dev_name',
                'text' => 'Ewilan Rivière'
            ],
            [
                'slug' => 'dev_title',
                'text' => 'Développeuse web, web mobile'
            ],
            [
                'slug' => 'dev_spec',
                'text' => 'Orientée back-end: PHP'
            ]
        ]);
    }
}
