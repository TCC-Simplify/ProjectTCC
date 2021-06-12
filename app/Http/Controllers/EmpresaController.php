<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use DB;

class EmpresaController extends Controller
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

        $id_empresa = DB::table('empresas')->where('cnpj', $request['cnpj'])->value('id_empresa');
        session()->put('id_empresa', $id_empresa);
        session()->put('senha_empresa', $request['senha']);

        return view('/auth/register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $id = session()->get('id_empresa');
        $dados = DB::table('empresas')->where('id_empresa', $id);
        return view('empresa/empresa',compact('dados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa= $this->repository->find($id);
        if(!$empresa)
        {
            return redirect()->back();
        }
        return view('alterar_dados_empresa',compact('empresa'));
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
        //senha_empresa = session()->get('senha_empresa');
        $senha_empresa = DB::table('empresa')->where('id_empresa', $id)->value('senha');
        if(bcrypt($request['password']) == $senha_empresa){
           Empresa::find($id)->update([
                'nome' =>  $request['nome'],
                'cep' => $request['cep'],
                'rua' =>  $request['rua'],
                'cidade' =>  $request['cidade'],
                'bairro' =>   $request['bairro'],
                'numero' =>   $request['numero'],
                'estado' =>   $request['estado'],
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
     public function delete($id)
     {
         
         $senha_empresa = DB::table('empresas')->where('id_empresa', $id)->value('senha');
         if(bcrypt($request['password']) == $senha_empresa ){
             Empresa::find($id)->update([
                 'ativo' => 'n'
             ]);
 
             return redirect('/welcome');//colocar o pra home 
         }else{
             //colocar a mensagem de erro 
             return redirect()->back();
         }
 
     }
}
