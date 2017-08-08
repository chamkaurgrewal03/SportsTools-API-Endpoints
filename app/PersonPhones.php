<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonPhones extends Model
{
     /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'person_phones';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['person_id', 'phone_number','phone_type'];

    public function person() {
      return $this->belongsTo('App\Person');
    }
}
