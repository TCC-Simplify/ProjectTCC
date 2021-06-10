<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='empresas';
    
    protected $fillable = [
        'nome','cnpj','cep','rua','bairro','numero','complemento','estado','senha','ativo', 'cidade'
    ];
}
