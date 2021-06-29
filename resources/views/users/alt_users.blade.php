@extends('layouts.fundo_padrao')

@section('links')
    <div class="links">
        <a href="{{ url('') }}" style="color: rgb(38, 109, 82);">Usuários</a>
        <a href="{{ url('/empresa') }}">Empresa</a>
        <a href="{{ url('') }}">Controle</a>
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
        <div class="a"><a href="{{ url('/cadastro_user') }}"><i class="fas fa-user-plus"></i></a></div>
        <div class="a"><a href="{{ url('/users') }}"><i class="fas fa-users es"></i></a></div>
        <div class="a"><a href="{{ url('') }}"><i class="fas fa-chart-area"></i></a></div>
    </div>
@endsection

@section('direita')
    <div class="direita cad_user">
        <div class="header">
            <a href="{{ url()->previous() }}" class="volt"><p>&#8592;  Voltar</p></a>   
        </div>

        <h1>Alteração de usuário</h1>

        <form action="{{ url('/update_user', $usuario->id)}}" method="POST" enctype="multipart/form-data" class="form-cad"> 
            <div class="form-group">

                {{ csrf_field() }}

                <input type="text" class="form-control cad-tam" name="name" placeholder="Nome:" value="{{ $usuario->name }}">
            </div>

            <div class="form-group">

                <input type="text" class="form-control cad-tam" name="email" placeholder="Email:" value="{{ $usuario->email}}" disabled>
            </div>

            <div class="form-group">

                <input type="text" class="form-control cad-tam" name="cpf" placeholder="CPF:" value="{{ $usuario->cpf }}">
            </div>

            <div class="form-group">

                <input type="text" class="form-control cad-tam" name="dt_nasc" placeholder="Data de nascimento:" value="{{ $usuario->dt_nasc }}">
            </div>

            <div class="form-group">

                <input type="text" class="form-control cad-tam" name="funcao" placeholder="Setor:" value="{{ $usuario->funcao }}">
            </div>

            <div class="form-group dec">   
                <select name="permissao" onchange="reloadWithParam()" class="form-control">
                            <option value="1" <?php if($usuario->permissao == 1) echo "selected"?>>Administrador</option>
                            <option value="2" <?php if($usuario->permissao == 2) echo "selected"?>>Gerente</option>
                            <option value="3" <?php if($usuario->permissao == 3) echo "selected"?>>Funcionário</option>
                </select>
            </div>

            <div class="form-group">
                <p class="cad-sen-p">Confirme a senha:</p><input id="password" type="password" placeholder="Senha:" class="form-control tam" name="password" required>
                <button type="button" onclick="mostrarSenha()" class="ver"><i class="fas fa-eye"></i></button>
            </div>

            <div id="botao">
                <input type="submit" name="botao" value="Alterar" class="btn-cad" />
            </div>

        </form>

    </div>
@endsection