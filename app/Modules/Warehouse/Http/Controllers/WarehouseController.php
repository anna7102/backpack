<?php

namespace App\Modules\Warehouse\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Warehouse extends Controller
{
    public function __construct()
    {
        $namespacePath = substr(__NAMESPACE__, 0,  strrpos(__NAMESPACE__, "\\"));
        View::addNamespace($namespacePath, app_path()."/module/".str_replace("\\", "/",     $namespacePath).'/views');
        Config::addNamespace($namespacePath, app_path()."/module/".str_replace("\\", "/",     $namespacePath).'/Config');
        var_dump(get_class(Config::getFacadeRoot()));
    }

    public function showWelcome()
    {
        // View::addLocation(app_path().'/module/Csol/Fight/views');
        echo "<pre>";
        var_dump($this);
        echo "</pre>";
        var_dump(Config::get('Warehouse::development.dbs.host'));
        die();
      //  return View::Make("Warehouse::a");
    }
}
