<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privileges extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'privileges';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['role_id', 'privilege','description','state','county','zip_postel','country','timezone','gps_lat_long','location','address_to_what'];

    public function user() {
      return $this->belongsToMany('App\User', 'user_privileges','user_id','privilege_id');
    }
}
