<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SnippetRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

/**
 * Class SnippetCrudController.
 *
 * @property \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SnippetCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Snippet');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/snippets');
        $this->crud->setEntityNameStrings('un snippet', 'snippets');
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
                'name'  => 'snippet',
                'label' => 'Snippet',
                'type'  => 'markdown',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SnippetRequest::class);

        $this->crud->addField([
            'name'         => 'slug',
            'label'        => 'Slug',
            'type'         => 'text',
            'attributes'   => [
                'placeholder' => 'Identifiant pour ce snippet',
            ],
        ]);
        $this->crud->addField([
            'name'         => 'snippet',
            'label'        => 'Snippet',
            'type'         => 'simplemde',
            'attributes'   => [
                'placeholder' => 'Votre snippet',
            ],
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
