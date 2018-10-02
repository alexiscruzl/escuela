<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnos extends Controller
{
    public function index()
    {
      /*if(request()->has('empty'))
      {
        $users =[];
      }else{
        $users =[
        'pedro',
        'juan',
        'alexis',
        'roberto',
      ];
      }*/
      
     return  view('alumnos.alumnosIndex');
      // 'users' => $users,
       //'title' => 'listado de usuarios'
    // ]);
       //->with('users',$users)
       //->with('title','listado de otro usuario');
    }
  public function show($id)
  {
    return "el numero que estas por obtener es el : {$id}";
  }
  public function create()
  {
    return view("alumnos.alumnosForm");
  }
}
