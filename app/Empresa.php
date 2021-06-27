<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='empresas';
    
    protected $fillable = [
        'nome','cnpj','cep','rua','bairro','numero','complemento','estado','senha','ativo', 'cidade'
    ];

    public $rules= [ 'nome'=>'required|min:10|max:200',
     'cnpj'=>'required|max:18|unique', 
     'cep'=>'required|max:9', 
     'rua'=>'required|max:500', 
     'bairro'=>'required|max:100', 
     'numero'=>'required|max:5',
     'complemento'=>'min:3|max:100',
      'estado'=>'required|max:2', 
      'senha'=>'required|min:8', 
      'cidade'=> 'required'
    ];

   
}
