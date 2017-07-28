<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
      /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'persons';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['first_name', 'last_name','birthdate','calculated_age','gender','privacy','special_needs','picture','citizen','hometown'];

    public function user() {
      return $this->belongsTo('App\User', 'id');
    }
}
