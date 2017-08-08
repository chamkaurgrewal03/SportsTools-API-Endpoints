<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','fingerprint','camera'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // person table relation
    public function person(){
      return $this->hasOne('App\Person','user_id');
    }

    //specific User Privileges detail
    public function privilege() {
      return $this->belongsToMany('App\Privileges','user_privileges','user_id','privilege_id');
    }

    //specific User Role detail
    public function roles() {
      return $this->belongsToMany('App\Roles','user_roles','user_id','role_id');
    }


}
