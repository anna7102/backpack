<?php

namespace App\app\Modules\Warehouse\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Zone extends Model {

    use CrudTrait;

    /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'zones';
    // protected $primaryKey = 'id';
    // protected $guarded = [];
    // protected $hidden = ['id'];
    protected $fillable = ['name'];
    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function warehouse()
    {
        return $this->belongsTo('App\app\Modules\Warehouse\Models\Warehouse');
    }

    public function locations()
    {
        return $this->hasMany('App\app\Modules\Warehouse\Models\Location');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}