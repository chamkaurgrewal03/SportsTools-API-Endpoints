<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonEmails extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'person_emails';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['person_id', 'email_address','email_type'];

    public function person() {
      return $this->belongsTo('App\Person');
    }
}
