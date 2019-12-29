<?php

namespace App\Http\Controllers\Admin;

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
        //     'name'         => 'link',
        //     'label'        => 'Lien',
        //     'type'         => 'url',
        //     'attributes' => [
        //         'placeholder' => 'Hyperlien ou téléversement d\'un fichier'
        //     ],
        // ]);
        $this->crud->addField([   // Upload
            'name' => 'link',
            'label' => 'Lien',
            'type' => 'upload',
            'upload' => true,
            // 'disk' => 'uploads', // if you store files in the /public folder, please ommit this; if you store them in /storage or S3, please specify it;
            // optional:
            // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URL's this will make a URL that is valid for the number of minutes specified
        ]);
        // $this->crud->addField([
        //     'label'        => 'Image',
        //     'name'         => 'image',
        //     'filename'     => 'image',
        //     'upload'       => true,
        //     'type'         => 'image',
        //     'aspect_ratio' => 1,
        //     'crop'         => true,
        //     'prefix' => 'storage/'
        // ], 'both');
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
