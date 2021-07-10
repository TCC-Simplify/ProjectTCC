@extends('layouts.fundo_padrao')

@section('links')
    <div class="links">
        <a href="{{ url('/pag_user') }}">Usuários</a>
        <a href="{{ url('/empresa') }}" style="color: rgb(38, 109, 82);">Empresa</a>
        <a href="{{ url('/mural') }}">Controle</a>
        <a class="log" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" onmouseover="getElementById('descricao').style.display='block'" onmouseout="getElementById('descricao').style.display='none'"><i class="fas fa-sign-out-alt"></i></a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <!--<div id="descricao" name="descricao">Sair</div>-->
    </div>
@endsection

@section('opcoes')
    <div class="opcoes empresa">
        <div class="a"><a href="{{ url('/empresa') }}"><i class="fas fa-city es"></i></a></div>
    </div>
@endsection

@section('direita')
    <div class="direita cad_user">
        <h1>Desativar empresa</h1>
        <form action="{{ url('/delete_empresa', $empresa->id)}}" method="POST" enctype="multipart/form-data" class="form-cad">
            <div class="form-group">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="nome" placeholder="Nome:" value="{{ $empresa->nome }}" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ:" value="{{ $empresa->cnpj }}" disabled>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="cep" placeholder="CEP:" id="cep" value="{{ $empresa->cep }}" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="estado" placeholder="Estado:" id="uf" value="{{ $empresa->estado }}" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade:" value="{{ $empresa->cidade }}" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro:" value="{{ $empresa->bairro }}" disabled>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="rua" id="endereco" placeholder="Rua:" value="{{ $empresa->rua }}" disabled>
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="numero" placeholder="N°:" value="{{ $empresa->numero }}" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="complemento" placeholder="Complemento:" value="{{ $empresa->complemento }}" <?php if($empresa->complemento == null) echo 'style="display: none;"'?> disabled>
            </div>
            
            <div class="form-group">
                <p class="cad-sen-p">Confirme a senha:</p><input id="password" type="password" placeholder="Senha:" class="form-control tam" name="password" required>
            </div>

            <div id="botao">
                <input type="submit" name="botao" value="Desativar" class="btn-cad" />
            </div>
        </form>
    </div>
@endsection
