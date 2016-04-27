<?php

namespace prototipo\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use prototipo\Http\Requests\Loginrequest;
use prototipo\Http\Requests;
use prototipo\Http\Controllers\Controller;
use Illuminate\Routing\Route;


class LogController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        
    $userdata=["name" =>$request->nombre,"password"=>$request->contrasena];   

     //return $userdata;
    // if(Auth::attempt("usuario" =>$request->usuario,"password"=>$request->contrasena)

     //$user = Usuario::where('usuario', '=', $request->usuario)->where('contrasena', '=', $request->contrasena)->first();

     
     //return $user;

        if (Auth::attempt($userdata,false)) 
    
           {
                return Redirect::to('/admin');
                 
           }
        else 
           {
               return redirect('/inicio')->with('message','store');
           } 

         //
               
   }

       public function logout()
   {
        Auth::logout();
        return Redirect::to('/inicio');
   }
 
}
