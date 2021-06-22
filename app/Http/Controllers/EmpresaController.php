<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
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
}
