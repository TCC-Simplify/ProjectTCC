<?php
 
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
         //
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
        User::create([
             'name' =>  $request['name'],
             'email' =>  $request['email'],
             'cpf' => $request['cpf'],
             'dt_nasc' =>  $request['dt_nasc'],
             'funcao' =>  $request['funcao'],
             'permissao' =>   $request['permissao'],
             'password' => bcrypt( $request['password']),
             'ativo'=> 's',
             'empresa'=> $id
         ]);
 
         return view('/home_register');
     }

    public function edit($id)
    {
        $user= $this->repository->find($id);
        if(!$user)
        {
            return redirect()->back();
        }
         return view('alterar_dados_usuario',compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $user= $this->repository->find($id);
        if(!$user)
        {
            return redirect()->back();
        }
        $data=$request->all();
        $user->update($data);
        return redirect()->route('');
    }
}
