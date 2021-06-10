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
            'senha' => bcrypt( $request['senha']),
            'ativo'=> 's'
        ]);

        $id_empresa = DB::table('empresas')->where('cnpj', $request['cnpj'])->value('id_empresa');
        session()->put('id_empresa', $id_empresa);

        return view('/auth/register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $empresa= $this->repository->find($id);
        if(!$empresa)
        {
            return redirect()->back();
        }
        $data=$request->all();
        $empresas->update($data);
        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa= $this->repository->find($id);
        if(!$empresa)
        {
            return redirect()->back();
        }
        $empresa->delete();

        return redirect()->route('');
    }
}
