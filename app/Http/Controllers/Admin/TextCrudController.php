<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TextRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TextCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TextCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Text');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/text');
        $this->crud->setEntityNameStrings(
            'un texte',
            'Textes'
        );
        $this->crud->denyAccess(['show']);
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->addColumns([
            [
                'name'  => 'slug',
                'label' => 'Identifiant',
                'type'  => 'text'
            ],
            [
                'name'  => 'text',
                'label' => 'Texte',
                'type'  => 'text'
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TextRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addField([
            'name'         => 'slug',
            'label'        => 'Identifiant',
            'type'         => 'text',
            'hint'  => 'Ne pas mettre d\'espace ou de majuscule',
            'attributes' => [
                'placeholder' => 'Slug permettant d\'identifier ce texte'
            ],
        ]);
        $this->crud->addField([
            'name'         => 'text',
            'label'        => 'Texte',
            'type'         => 'summernote',
            // 'hint'  => 'Some hint text',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
