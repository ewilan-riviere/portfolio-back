<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FormationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

/**
 * Class FormationCrudController.
 *
 * @property CrudPanel $crud
 */
class FormationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Formation');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/formations');
        $this->crud->setEntityNameStrings('une formation', 'Formations');
        $this->crud->denyAccess(['show']);
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name'  => 'title',
                'label' => 'Titre',
                'type'  => 'text',
            ],
            [
                'name'  => 'logo',
                'label' => 'Logo de l\'organisme',
                'type'  => 'image',
            ],
            [
                'name'  => 'place',
                'label' => 'Lieu de la formation',
                'type'  => 'text',
            ],
            [
                'name'  => 'level',
                'label' => 'Niveau de la formation',
                'type'  => 'text',
            ],
            [
                'name'  => 'date_begin',
                'label' => 'Début de la formation',
                'type'  => 'text',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(FormationRequest::class);

        $this->crud->addField([
            'name'         => 'title',
            'label'        => 'Titre',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'certificate',
            'label'        => 'Scan du certificat',
            'type'         => 'upload',
            'upload'       => true,
        ]);
        $this->crud->addField([
            'name'         => 'logo',
            'label'        => 'Logo de l\'organisme',
            'type'         => 'image',
            'upload'       => true,
            'crop'         => true,
            'aspect_ratio' => 1,
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
