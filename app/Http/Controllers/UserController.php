<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
class UserController extends Controller
{
  public function __construct(){}

  public function getUsers(){
    $users=User::all();
      if($users){
        return Response::json(array(
          'status'=>200,
          'users'=>$users
          )
        );
      }else{
        return Response::json(array(
          'success'=>false,
          'status'=>500,
          'message'=>'something wrong happened with server'
          )
        );
      }

  }

  public function getUserById($id){
    $user=User::find($id);
    $user->person;
    return $user;
      if($user){
        return Response::json(array(
          'status'=>200,
          'users'=>$user
          )
        );
      }else{
        return Response::json(array(
          'success'=>false,
          'status'=>500,
          'message'=>'something wrong happened with server'
          )
        );
      }

  }

}
