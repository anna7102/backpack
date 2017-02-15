<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Admin Interface Routes
Route::group(['prefix' => 'admin'], function()
{
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('warehouse', 'WarehouseCrudController');

    // [...] other routes
});