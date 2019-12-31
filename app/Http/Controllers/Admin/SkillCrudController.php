<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SkillRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

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
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/skill');
        $this->crud->setEntityNameStrings('une compétence', 'Compétences');
        $this->crud->enableDetailsRow();
        $this->crud->denyAccess(['show']);
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->addColumns([
            [
                'name'  => 'title',
                'label' => 'Nom',
                'type'  => 'text'
            ],
            [
                'label' => "Catégorie", // Table column heading
                'type' => "select",
                'name' => 'category_id', // the column that contains the ID of that connected entity;
                'entity' => 'category', // the method that defines the relationship in your Model
                'attribute' => "category", // foreign key attribute that is shown to user
                'model' => "App\Models\Category", // foreign key model
             ],
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
            'attribute' => 'category', // foreign key attribute that is shown to user
            'model' => 'App\Models\Category', // foreign key model
            'hint' => 'La catégorie dans laquelle se situe cette compétence',
		]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
