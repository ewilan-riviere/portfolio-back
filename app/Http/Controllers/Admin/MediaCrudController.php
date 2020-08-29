<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MediaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

/**
 * Class MediaCrudController.
 *
 * @property CrudPanel $crud
 */
class MediaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Media');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/medias');
        $this->crud->setEntityNameStrings(
            'un média',
            'Médias'
        );
        $this->crud->denyAccess(['show']);
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name'  => 'slug',
                'label' => 'Identifiant',
                'type'  => 'text',
            ],
            [
                'name'  => 'media',
                'label' => 'Média',
                'type'  => 'image',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MediaRequest::class);

        $this->crud->addField([
            'name'         => 'slug',
            'label'        => 'Identifiant',
            'type'         => 'text',
            'hint'         => 'Ne pas mettre d\'espace ou de majuscule',
            'attributes'   => [
                'placeholder' => 'Slug permettant d\'identifier ce texte',
            ],
        ]);
        $this->crud->addField([
            'name'         => 'media',
            'label'        => 'Média',
            'type'         => 'browse',
            // 'hint'  => 'Some hint text',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
