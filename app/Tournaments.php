<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
      /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'tournaments';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['start_date', 'end_date','creation_date','games_number','name','description','organization_id','sport_id'];

    public function user() {
      return $this->belongsTo('App\Organization', 'id');
    }
}
