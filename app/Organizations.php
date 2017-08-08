<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
      /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'organizations';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['parent_organization_id', 'name','type','sports','primary_secondary','organization_logo','organization_contact_info','organization_record'];

    public function tournaments() {
      return $this->hasMany('App\Tournaments', 'organization_id','id');
    }
}
