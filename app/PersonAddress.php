<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonAddress extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'address';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['address1', 'address2','city','state','county','zip_postel','country','timezone','gps_lat_long','location','address_to_what'];

    public function person() {
      return $this->belongsToMany('App\Person', 'person_addresses','person_id','address_id');
    }
}
