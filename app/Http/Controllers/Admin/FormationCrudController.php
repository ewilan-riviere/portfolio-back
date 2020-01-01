<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FormationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FormationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
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
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/formation');
        $this->crud->setEntityNameStrings('une formation', 'Formations');
        $this->crud->denyAccess(['show']);
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name'  => 'title',
                'label' => 'Titre',
                'type'  => 'text'
            ],
            [
                'name'  => 'certificate',
                'label' => 'Certificat',
                'type'  => 'image'
            ],
            [
                'name'  => 'logo',
                'label' => 'Logo de l\'organisme',
                'type'  => 'image'
            ],
            [
                'name'  => 'resume',
                'label' => 'Résumé de la formation',
                'type'  => 'text'
            ],
            [
                'name'  => 'place',
                'label' => 'Lieu de la formation',
                'type'  => 'text'
            ],
            [
                'name'  => 'place_link',
                'label' => 'Site web de la formation',
                'type'  => 'text'
            ],
            [
                'name'  => 'promo',
                'label' => 'Nom de la promotion',
                'type'  => 'text'
            ],
            [
                'name'  => 'promo_link',
                'label' => 'Site web de la promotion',
                'type'  => 'text'
            ],
            [
                'name'  => 'level',
                'label' => 'Niveau de la formation',
                'type'  => 'text'
            ],
            [
                'name'  => 'date_begin',
                'label' => 'Début de la formation',
                'type'  => 'text'
            ],
            [
                'name'  => 'date_end',
                'label' => 'Fin de la formation',
                'type'  => 'text'
            ],
            [
                'name'  => 'project_title',
                'label' => 'Projet · titre',
                'type'  => 'text'
            ],
            [
                'name'  => 'project_resume',
                'label' => 'Projet · résumé',
                'type'  => 'text'
            ],
            [
                'name'  => 'project_type',
                'label' => 'Projet · type',
                'type'  => 'text'
            ],
            [
                'name'  => 'project_link',
                'label' => 'Projet · lien',
                'type'  => 'text'
            ],
            [
                'name'  => 'project_file',
                'label' => 'Projet · fichier',
                'type'  => 'text'
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
            'type' => 'upload',
            'upload' => true,
        ]);
        $this->crud->addField([
            'name'         => 'logo',
            'label'        => 'Logo de l\'organisme',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
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
