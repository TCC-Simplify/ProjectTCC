<?php
 
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class UsuarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $request;
     private $repository;
 
     
     public function index()
     {
        $todos = User::latest()->paginate(3);
        return view('users/mostrar_todos', [
            'todos' => $todos,
        ]);
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function create(Request $request)
     {       
        $id = session()->get('id_empresa');

        if(isset($request['permissao']))
        {
            $checkbox = 2;
        }
        else
        {
            $checkbox = 3;
        }

        User::create([
             'name' =>  $request['name'],
             'email' =>  $request['email'],
             'cpf' => $request['cpf'],
             'dt_nasc' =>  $request['dt_nasc'],
             'funcao' =>  $request['funcao'],
             'permissao' =>   $checkbox,
             'password' => bcrypt( $request['password']),
             'ativo'=> 's',
             'empresa'=> $id
         ]);
 
         return redirect('/users');
     }

    /**
      * 
      *
      * @param  int $id
      * @return \Illuminate\Http\Response
      */

    public function show($id){
        $usuario = User::find($id);
        // carrega o registro (realiza um select e um fetch internamente)
        return view('users/alt_users',compact('usuario'));
    }

    public function del($id){
        $usuario = User::find($id);
        // carrega o registro (realiza um select e um fetch internamente)
        return view('users/del_users',compact('usuario'));
    }

    /**
      * 
      *
      * @param  int $id
      * @return \Illuminate\Http\Response
      */

    public function destroy($id)
    {
        $senha_empresa = session()->get('senha_empresa');
        $senha_usuario = DB::table('users')->where('id', $id)->value('password');
        if($request['password'] == $senha_usuario || $request['password'] == $senha_empresa){
            User::find($id)->update([
                'ativo' => 'n'
            ]);
        }

        index();
    }
       

    public function update(Request $request, $id)
    {
        $senha_empresa = session()->get('senha_empresa');
        $senha_usuario = DB::table('users')->where('id', $id)->value('password');
        if($request['password'] == $senha_usuario || $request['password'] == $senha_empresa){
            User::find($id)->update($request->all());
        }

        show($id);
    }
}
