<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProjectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ProjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Project');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/project');
        $this->crud->setEntityNameStrings('un projet', 'Projets');
        $this->crud->denyAccess(['show']);
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name'  => 'title',
                'label' => 'Nom',
                'type'  => 'text'
            ],
        ]);
        $this->crud->addColumns([
            [
                'name'  => 'image',
                'label' => 'Image',
                'type'  => 'image'
            ],
        ]);
        $this->crud->addColumns([
            [
                'name'  => 'image-title',
                'label' => 'Image avec titre',
                'type'  => 'image'
            ],
        ]);
        $this->crud->addColumns([
            [
                'name'  => 'resume',
                'label' => 'Résumé',
                'type'  => 'text'
            ],
        ]);
        $this->crud->addColumns([
            [
                'name'  => 'github_link',
                'label' => 'Lien du GitHub',
                'type'  => 'text'
            ],
        ]);
        $this->crud->addColumns([
            [
                'name'  => 'try_it',
                'label' => 'Lien pour l\'essayer',
                'type'  => 'text'
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProjectRequest::class);

        $this->crud->addField([
            'name'         => 'title',
            'label'        => 'Nom',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Nom du projet'
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

        $this->crud->addField([
            'name'         => 'image-title',
            'label'        => 'Nom',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Nom du projet'
            ],
        ]);

        $this->crud->addField([
            'name'         => 'resume',
            'label'        => 'Nom',
            'type'         => 'textarea',
            'attributes' => [
                'placeholder' => 'Nom du projet'
            ],
        ]);

        $this->crud->addField([
            'name'         => 'title',
            'label'        => 'Nom',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Nom du projet'
            ],
        ]);

        $this->crud->addField([
            'name'         => 'github_link',
            'label'        => 'Nom',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Nom du projet'
            ],
        ]);

        $this->crud->addField([
            'name'         => 'try_it',
            'label'        => 'Nom',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Nom du projet'
            ],
        ]);

        $this->crud->addField([
            'name'         => 'font',
            'label'        => 'Police utilisée',
            'type'         => 'browse',
            'attributes' => [
                'placeholder' => 'Nom du projet'
            ],
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
