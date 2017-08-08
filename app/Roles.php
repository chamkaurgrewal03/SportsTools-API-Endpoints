<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
        /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'roles';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['role_name', 'description','role_target_type'];

    public function user() {
      return $this->belongsToMany('App\User', 'user_roles','user_id','role_id');
    }
}
