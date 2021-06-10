@extends('layouts.fundo_padrao')

@section('links')
    <div class="links">
        <a href="{{ url('') }}" style="color: rgb(38, 109, 82);">Usuários</a>
        <a href="{{ url('') }}">Empresa</a>
        <a href="{{ url('') }}">Controle</a>
    </div>
@endsection

@section('opcoes')
    <div class="opcoes">
        <div class="a es"><a href="{{ url('') }}"><i class="fas fa-user-plus"></i></a></div>
        <div class="a"><a href="{{ url('') }}"><i class="fas fa-user-times"></i></a></div>
        <div class="a"><a href="{{ url('') }}"><i class="fas fa-user-edit"></i></a></div>
        <div class="a"><a href="{{ url('') }}"><i class="fas fa-users"></i></a></div>
    </div>
@endsection

@section('direita')
    <div class="direita">
        <div class="home_register">
            <h3>Seja bem vindo! Comece cadastrando seus funcionários</h3>
            <p>DEIXEI SÓ ISSO POR ENQUANTO MAS AINDA VOU MEXER NESSA ÁREA</p>
            <a href="{{ url('/cadastro_user') }}"><button class="reg-bot">Começar o cadastro</button></a>
        </div>
    </div>
@endsection