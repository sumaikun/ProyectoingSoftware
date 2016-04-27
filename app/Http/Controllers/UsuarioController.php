<?php

namespace prototipo\Http\Controllers;
use Illuminate\Http\Request;
use prototipo\User;
use prototipo\Http\Requests;
use prototipo\Http\Controllers\Controller;
use prototipo\Rol;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //return "usuario creado";
       $users = User::All();
     
       return view('admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $roles = Rol::lists('nombre','id');
        return view('admin.crear',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
         /*    echo  $_POST['nombre']." "; 
             echo  $_POST['usuario']." ";
             echo  $_POST['contrasena']." ";
             echo  $_POST['correo']." ";
             echo  $_POST['rol']." ";
             $rol =$_POST['rol'];
             echo $rol;
               $rol =$_POST['rol'];
                $rolint = (int)$rol;  
                ECHO $rolint;*/
      
                             
          /*  User::create
            ([
                $nombre = 'nombre',
                $usuario = 'usuario',
                $contrasena = 'contrasena',

                $nombre => $request['nombre'],
               'usuario' => $request['usuario'],
               'contraseña' => $_POST['contrasena'],
               'correo' => $_POST['correo'],
                $rol =$_POST['rol'],
                $rolint = (int)$rol,              
                'rol_id' => $rolint,                
            ]);
             return redirect('/adminUs')->with('message','store');*/
             User::create
             (
               [

               'name' => $request['nombre'],
               'password' => $_POST['contrasena'],
               'email' => $_POST['correo'],

               ]
                
             );
             return redirect('/adminUs')->with('message','store');
             

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
         
        return "soy show";
       /* $user = Usuario::find($id);
        return view('admin.CambioEstado',['user'=>$user]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $roles = Rol::lists('nombre','id');
        $user = User::find($id);
        return view('admin.editar',compact('user','roles'));
 
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          
             return "soy update";
            /*$user = User::find($id);
            $user-> fill(['email'=> $request['correo'],]); 
            $user -> fill(['idrol'=> $request['rol'],]);
            $user -> fill(['password'=> $request['contrasena'],]);  
            $user-> save();
            return redirect('/adminUs')->with('message','update');*/
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {        
          //$user = Usuario::find($id);
         //,['user'=>$user]);
    }
}
