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
        $this->crud->setEntityNameStrings('social', 'socials');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
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
                'name'  => 'name',
                'label' => 'Nom',
                'type'  => 'text'
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SocialRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();

        $this->crud->addField([
            'name'         => 'name',
            'label'        => 'Nom',
            'type'         => 'text',
            'attributes' => [
                'placeholder' => 'Nom du lien'
            ],
        ]);

        // $this->crud->addField([
        //     'label'     => 'Type',
        //     'name'      => 'type',
        //     'type'      => 'radio',
        //     'options'   => Social::getType(),
        //     'hide_when' => Social::getHideAttributes(),
        //     'default'   => 'link',
        //     'inline'    => true
        // ]);

        $this->crud->addField([
            'label' => 'Type',
            'name' => 'type', // can be a real db field, or unique name
            'type' => 'toggle',
            'options' => Social::getType(),
            'hide_when' => Social::getHideAttributes(),
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
