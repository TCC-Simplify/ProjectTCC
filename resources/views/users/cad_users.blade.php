@extends('layouts.fundo_padrao')

@section('links')
    <div class="links">
        <a href="{{ url('/pag_user') }}" style="color: rgb(38, 109, 82);">Usuários</a>
        <a href="{{ url('/empresa') }}">Empresa</a>
        <a href="{{ url('/mural') }}">Controle</a>
        <a class="log" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" onmouseover="getElementById('descricao').style.display='block'" onmouseout="getElementById('descricao').style.display='none'"><i class="fas fa-sign-out-alt"></i></a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <!--<div id="descricao" name="descricao">Sair</div>-->
    </div>
@endsection

@section('opcoes')
    <div class="opcoes users">
        <div class="a"><a href="{{ url('/pag_user') }}"><i class="fas fa-user"></i></a></div>
        <div class="a" <?php if(Auth::user()->permissao == 3) echo 'style="display: none;"'?>><a href="{{ url('/cadastro_user') }}"><i class="fas fa-user-plus es"></i></a></div>
        <div class="a" <?php if(Auth::user()->permissao == 3) echo 'style="display: none;"'?>><a href="{{ url('/users') }}"><i class="fas fa-users"></i></a></div>
        <div class="a"><a href="{{ url('') }}"><i class="fas fa-chart-area"></i></a></div>
    </div>
@endsection

@section('direita')
    <div class="direita cad_user">

        <h1>Cadastro de usuários</h1>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@vsilva472/jquery-viacep/dist/jquery-viacep.min.js"></script>
        <script src="<?php echo asset('js/jquery.maskedinput-1.1.4.pack.js')?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/funcs_cad_profissional.js')?>"></script> 

        <form action="{{ url('/cad_user')}}" method="POST" enctype="multipart/form-data" class="form-cad">

            <div class="form-group">

                {{ csrf_field() }}

                <input type="text" class="form-control cad-tam" name="name" placeholder="Nome:" value="{{ $users->nome ?? old('nome') }}">
            </div>

            <div class="form-group">

                <input type="text" class="form-control cad-tam" name="email" placeholder="Email:" value="{{$users->email ?? old('email') }}">
            </div>

            <div class="form-group">

                <input type="text" class="form-control cad-tam" name="cpf" id="cpf" placeholder="CPF:" value="{{ $users->cpf ?? old('cpf') }}">
            </div>

            <div class="form-group">

                <input type="text" class="form-control cad-tam" name="dt_nasc" id="dt_nasc" placeholder="Data de nascimento:" value="{{ $users->dt_nasc ?? old('dt_nasc') }}">
            </div>

            <div class="form-group">

                <input type="text" class="form-control cad-tam" name="funcao" placeholder="Setor:" value="{{ $users->funcao ?? old('funcao') }}">
            </div>

            <div class="form-group dec">
                <div class="func"><p>Funcionário</p></div>
                <div class="switch__container">
                    <input id="switch-flat" class="switch switch--flat" type="checkbox" name="permissao" value="2">
                    <label for="switch-flat"></label>
                </div>   
                <div class="ger"><p>Gerente</p></div>
            </div>

            <div class="form-group">
               <p class="cad-sen-p">Senha padrão da empresa:</p><input type="text" class="form-control cad-tam cad-sen" name="password" value="<?php echo session()->get('senha_empresa');?>" disabled>
            </div>

            <div id="botao">
                <input type="submit" name="botao" value="Cadastrar" class="btn-cad" />
            </div>

        </form>

    </div>
@endsection 