<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
   function index(){
    $users = User::all();
    $data['users'] = $users;
    return view('user', ['users' => $users]);
    // return view('user');
   }

   function edit($id){
    $user = User::find($id);
    $data['user'] = $user;
    return view('user_edit', $data);
   }

   function edit_action(Request $req){
    // print_r($req->input());
    $user = User::find($req->id);
    $user->name = $req->name;
    $user->email = $req->email;
    $user->password =$req->password;
    $user->save();
    
    return redirect('/user');
    }

   function delete(Request $req){
     $user = User::find($req->id);
     $user->delete();
     return redirect('/user');
    }
}