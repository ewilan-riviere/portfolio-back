<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SkillRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

use App\Models\Category;

/**
 * Class SkillCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SkillCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Skill');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/skills');
        $this->crud->setEntityNameStrings('une compétence', 'Compétences');
        $this->crud->setDefaultPageLength(50);
        $this->crud->denyAccess(['show']);
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->addFilter([
            'name' => 'category_id',
            'type' => 'select2',
            'label'=> 'Catégorie',
        ], Category::all()->pluck('display', 'id')->toArray(), function ($value) {
            $this->crud->addClause('where', 'category_id', $value);
        });
        $this->crud->addFilter([
            'type' => 'simple',
            'name' => 'is_favorite',
            'label'=> 'Favorite',
        ], false, function () {
            $this->crud->addClause('where', 'is_favorite', true);
        });
        $this->crud->addColumns([
            [
                'name'  => 'title',
                'label' => 'Nom',
                'type'  => 'text'
            ],
            [
                'name'  => 'subtitle',
                'label' => 'Sous-titre',
                'type'  => 'text'
            ],
            [
                'name'  => 'image',
                'label' => 'Image',
                'type'  => 'image',
            ],
            [
                'label' => "Catégorie", // Table column heading
                'type' => "select",
                'name' => 'category_id', // the column that contains the ID of that connected entity;
                'entity' => 'category', // the method that defines the relationship in your Model
                'attribute' => "display", // foreign key attribute that is shown to user
                'model' => "App\Models\Category", // foreign key model
            ],
            [
                'name'     => 'is_favorite',
                'label'    => 'Favorite',
                'type'     => 'boolean',
                'options' => [
                    1 => '<i class="cil-check"></i>',
                    0 => ''
                ]
            ]
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SkillRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addField([
            'name'         => 'title',
            'label'        => 'Nom',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Nom de cette compétence'
            ],
        ]);

        $this->crud->addField([
            'label' => 'Categorie',
            'type' => 'select2',
            'name' => 'category_id', // the db column for the foreign key
            'entity' => 'category', // the method that defines the relationship in your Model
            'attribute' => 'display', // foreign key attribute that is shown to user
            'model' => 'App\Models\Category', // foreign key model
            'hint' => 'La catégorie dans laquelle se situe cette compétence',
		]);

        $this->crud->addField([
            'name'         => 'version',
            'label'        => 'Version',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Numéro de version actuellement utilisée'
            ],
        ]);

        $this->crud->addField([
            'name'         => 'subtitle',
            'label'        => 'Sous-titre',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Rapide description'
            ],
        ]);
        
        $this->crud->addField([
            'name'        => 'is_free_app',
            'label'       => 'Application gratuite',
            'type'        => 'radio',
            'options'     => [
                1 => "Oui",
                0 => "Non"
            ],
            'inline'      => true,
        ]);

        $this->crud->addField([
            'name'         => 'link',
            'label'        => 'Lien',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Lien vers le site web'
            ],
        ]);

        $this->crud->addField([
            'name'         => 'color',
            'label'        => 'Thème',
            'type' => 'color',
            'default' => '#000000',
            'hint' => "Couleur liée au thème du logo"
        ]);

        $this->crud->addField([
            'name'        => 'color_text_dark',
            'label'       => 'Inverser la couleur du texte',
            'type'        => 'radio',
            'options'     => [
                1 => "Oui",
                0 => "Non"
            ],
            'hint' => '<i>Si le thème est trop clair, le texte blanc par défaut peut être difficilement lisible, choisissez ici d\'activer la version sombre</i>',
            'inline'      => true,
        ]);

        $this->crud->addField([
            'name'         => 'details',
            'label'        => 'Détails',
            'type'         => 'textarea',
            'attributes' => [
                'placeholder' => 'Description plus détaillée'
            ],
        ]);

        $this->crud->addField([
            'name'        => 'is_favorite',
            'label'       => 'Favorite',
            'type'        => 'radio',
            'options'     => [
                1 => "Oui",
                0 => "Non"
            ],
            'hint' => '<i>Définir cette compétence comme favorite</i>',
            'inline'      => true,
        ]);

        $this->crud->addField([
            'name'         => 'blockquote_text',
            'label'        => 'Citation : texte',
            'type'         => 'textarea',
            'attributes' => [
                'placeholder' => 'Citation illustrant cette compétence'
            ],
        ]);

        $this->crud->addField([
            'name'         => 'blockquote_who',
            'label'        => 'Citation : auteur·ice',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Auteur·ice de la citation'
            ],
        ]);

        $this->crud->addField([
            'label'        => 'Image',
            'name'         => 'image',
            'filename'     => 'image',
            'upload'       => true,
            'type'         => 'image',
            'aspect_ratio' => 1,
            'crop'         => true,
        ], 'both');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
