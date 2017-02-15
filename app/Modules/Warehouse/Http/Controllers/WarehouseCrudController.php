<?php

namespace App\Modules\Warehouse\Http\Controllers;

use App\Modules\Warehouse\Models\Warehouse;

use Illuminate\Http\Request as Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\WarehouseCrudRequest as StoreRequest;



class WarehouseCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel("App\Modules\Warehouse\Models\Warehouse");

        $this->crud->setRoute("admin/warehouse");
        $this->crud->setEntityNameStrings('entrepôt', 'entrepôts');


        $this->crud->setFromDb();
/*
        $this->crud->addField([
            'name' => 'name',
            'label' => "Tag name"
        ]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->crud->hasAccessOrFail('update');

        // get the info for that entry
        $this->data['entry'] = $this->crud->getEntry($id);
        $this->data['crud'] = $this->crud;
        $this->data['saveAction'] = $this->getSaveAction();
        $this->data['fields'] = $this->crud->getUpdateFields($id);
        $this->data['title'] = trans('backpack::crud.edit').' '.$this->crud->entity_name;

        $this->data['id'] = $id;

        // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
        return view($this->crud->getWarehouseEditView(), $this->data);
    }


    public function store(Request $request)
    {
        return parent::storeCrud();
    }

    public function update(Request $request)
    {
        return parent::updateCrud();
    }
}