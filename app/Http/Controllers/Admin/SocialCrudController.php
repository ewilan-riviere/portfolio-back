<?php

namespace App\Http\Controllers\Admin;

use App\Models\Social;
use App\Http\Requests\SocialRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SocialCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SocialCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Social');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/social');
        $this->crud->setEntityNameStrings('un réseau social', 'Réseaux sociaux');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name'  => 'name',
                'label' => 'Nom',
                'type'  => 'text'
            ],
            [
                'name'  => 'link',
                'label' => 'Lien',
                'type'  => 'text'
            ],
            [
                'name'  => 'file',
                'label' => 'Fichier',
                'type'  => 'text'
            ],
            [
                'name'  => 'name',
                'label' => 'Nom',
                'type'  => 'text'
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SocialRequest::class);

        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Nom du lien'
            ],
        ]);

        $this->crud->addField([
            'label' => 'Type',
            'name' => 'type', // can be a real db field, or unique name
            'type' => 'toggle',
            'options' => [
                0 => 'Lien',
                1 => 'Fichier',
            ],
            'hide_when' => [ // these fields hide (by name) when the key matches the radio value
                0 => ['file'],
                1 => ['link']
            ],
            'default' => 0, // which option to select by default
            'inline' => true
        ]);

        $this->crud->addField([
            'name' => 'file',
            'label' => 'Fichier',
            'type' => 'upload',
            'upload' => true,
        ]);

        $this->crud->addField([
            'name' => 'link',
            'label' => 'Lien',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name'         => 'icon',
            'label'        => 'Logo',
            'type'         => 'icon_picker',
            'iconset' => 'fontawesome' // options: fontawesome, glyphicon, ionicon, weathericon, mapicon, octicon, typicon, elusiveicon, materialdesign
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
