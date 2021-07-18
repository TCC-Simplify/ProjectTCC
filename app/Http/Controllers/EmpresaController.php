<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Empresa;
use App\Equipes;
use DB;
use Illuminate\Support\Facades\Validator;



class EmpresaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $request;
    private $repository;

    public function __construct(Empresa $empresa)
    {
        $this->empresa = $empresa;
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('empresa/cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $mensagens= [
            'nome.required'=> 'o nome é obrigatorio!',
            'cnpj.required'=> 'o CNPJ é obrigatorio',
            'senha.min'=> 'A senha deve ter no mínimo 8 caracteres'
        ];
        
       /*$validate= validator($request, $this->empresa->rules, $mensagens);
       if($validate->fails()){
           return redirect()->back()
           ->withErrors($validate)
           ->withInput();

       }*/
        
        Empresa::create([
            'nome' =>  $request['nome'],
            'cnpj' => $request['cnpj'],
            'cep' =>  $request['cep'],
            'rua' =>  $request['rua'],
            'cidade' =>  $request['cidade'],
            'bairro' =>  $request['bairro'],
            'numero' =>  $request['numero'],
            'complemento' =>  $request['complemento'],
            'estado' =>  $request['estado'],
            'senha' => bcrypt($request['senha']),
            'ativo'=> 's'
        ]);

        $id_empresa = DB::table('empresas')->where('cnpj', $request['cnpj'])->value('id');
        session()->put('id_empresa', $id_empresa);
        session()->put('senha_empresa', $request['senha']);

        return view('/auth/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $id = session()->get('id_empresa');
        $empresa = Empresa::find($id);
         return view('empresa/empresa',compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa= Empresa::find($id);
        if(!$empresa)
        {
            return redirect()->back();
        }
        return view('empresa/alterar_dados_empresa',compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostra($id)
    {
        $empresa= Empresa::find($id);
        if(!$empresa)
        {
            return redirect()->back();
        }
        return view('empresa/deleta_dados_empresa',compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $senha_empresa = session()->get('senha_empresa');

        if($request['password'] == $senha_empresa){
           Empresa::find($id)->update([
                'nome' =>  $request['nome'],
                'cep' => $request['cep'],
                'rua' =>  $request['rua'],
                'cidade' =>  $request['cidade'],
                'bairro' =>   $request['bairro'],
                'numero' =>   $request['numero'],
                'estado' =>   $request['estado'],
                'complemento' =>   $request['complemento'],
            ]);

            return redirect('/empresa');
        }else{
            //mensagemde erro
            return redirect()->back();
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function delete(Request $request, $id)
     {
         $senha_empresa = session()->get('senha_empresa');

         if($request['password'] == $senha_empresa ){
             Empresa::find($id)->update([
                 'ativo' => 'n'
             ]);
             return  redirect()->route('logout');
         }
            else
             //colocar a mensagem de erro 
             return redirect()->back();
         
 
     }

    //  public function equipe_show(){
    //     $equipes = Equipes::find();
    //     if(!$equipes)
    //     {
    //         return redirect()->back();
    //     }
    //     return view('empresa/equipes',compact('equipes'));
    // }

    public function equipe_show($nome){
        $id_equipe = DB::table('equipes')->where('equipe', $nome)->value('id');
        $usuarios = User::all()->where('equipe', $id_equipe);
        if(!$usuarios)
        {
            return redirect()->back();
        }

        return view('empresa/equipe_dados', compact('usuarios'))->with('nome', $nome);
    }

     public function equipe_show_all(){
        $equipes = Equipes::all()->where('ativo', 's');
        if(!$equipes)
        {
            return redirect()->back();
        }
        return view('empresa/equipes',compact('equipes'));
    }

    public function equipe_create_form(){
        $usuarios = User::all();
        if(!$usuarios)
        {
            return redirect()->back();
        }
        return view('empresa/equipes_cadastro', compact('usuarios'));
    }

    public function equipe_create(Request $request){

        $id_empresa = session()->get('id_empresa');
        Equipes::create([
            'aux' =>  1,
            'equipe' => $request['nome'],
            'ativo' =>  's',
            'empresa' =>  $id_empresa,
        ]);
        $id_equipe = DB::table('equipes')->where('equipe', $request['nome'])->value('id');
        User::find($request['usuario'])->update([
            'equipe' => $id_equipe
        ]);

        return redirect('/equipes');
    }

    public function equipe_delete(Request $request){
        Equipes::find($request['equipe'])->update([
            'ativo' => 'n'
        ]);
        User::where('equipe', $request['equipe'])->update([
            'equipe' => null
        ]);
        
        return redirect()->back();
    }

    public function equipe_add_form($nome){
        $id_equipe = DB::table('equipes')->where('equipe', $nome)->value('id');
        $usuarios = User::all()->where('equipe', '!=', $id_equipe);

        return view('empresa/equipe_add', compact('usuarios'))->with('nome', $nome);
    }

    public function equipe_add(Request $request, $nome){
        $id_equipe = DB::table('equipes')->where('equipe', $nome)->value('id');
        User::find($request['usuario'])->update([
            'equipe' => $id_equipe
        ]);

        return redirect('/equipe/'.$nome);
    }

    public function equipe_remove(Request $request){
        User::find($request['usuario'])->update([
            'equipe' => null
        ]);

        return redirect()->back();
    }
}
