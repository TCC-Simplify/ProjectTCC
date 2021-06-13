@extends('layouts.fundo_padrao')

@section('links')
    <div class="links">
        <a href="{{ url('') }}">Usuários</a>
        <a href="{{ url('/empresa') }}" style="color: rgb(38, 109, 82);">Empresa</a>
        <a href="{{ url('') }}">Controle</a>
        <a class="log" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" onmouseover="getElementById('descricao').style.display='block'" onmouseout="getElementById('descricao').style.display='none'"><i class="fas fa-sign-out-alt"></i></a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <div id="descricao">Sair</div>
    </div>
@endsection

@section('opcoes')
    <div class="opcoes empresa">
        <div class="a"><a href="{{ url('/empresa') }}"><i class="fas fa-city es"></i></a></div>
        <div class="a"><a href="{{ url('/mural_avisos') }}"><i class="far fa-calendar-alt"></i></a></div>
    </div>
@endsection

@section('direita')
    <div class="direita cad_user">
        <h1>Dados da empresa</h1>
        <div class="form-cad">
            <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome:" value="{{ $empresa->nome }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ:" value="{{ $empresa->cnpj }}" required>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="cep" placeholder="CEP:" id="cep" value="{{ $empresa->cep }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="estado" placeholder="Estado:" id="uf" value="{{ $empresa->estado }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade:" value="{{ $empresa->cidade }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro:" value="{{ $empresa->bairro }}" required>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="rua" id="endereco" placeholder="Rua:" value="{{ $empresa->rua }}" required>
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="numero" placeholder="N°:" value="{{ $empresa->numero }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="complemento" placeholder="Complemento:" value="{{ $empresa->complemento }}" <?php if($empresa->complemento == null) echo 'style="display: none;"'?>>
            </div>
            <a href="{{ url('/editar_empresa', $empresa->id) }}" <?php if($empresa->permissao == 2 || $empresa->permissao == 3) echo 'style="display: none;"'?>><button class="btn-alt-emp">Alterar</button></a>
            &nbsp &nbsp &nbsp &nbsp &nbsp 
            <a href="{{ url('/del_empresa', $empresa->id) }}" <?php if($empresa->permissao == 2 || $empresa->permissao == 3) echo 'style="display: none;"'?>><button class="btn-del-emp">Desativar</button></a>
        </div>
    </div>
@endsection
