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
        <h1>Alterar dados da empresa</h1>
        <form action="{{ url('/update_empresa', $empresa->id)}}" method="POST" enctype="multipart/form-data" class="form-cad">
            <div class="form-group">
            {{ csrf_field() }}
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
                <input type="text" class="form-control" name="complemento" placeholder="Complemento:" value="{{ $empresa->complemento }}">
            </div>
            
            <div class="form-group">
                <p class="cad-sen-p">Confirme a senha:</p><input id="password" type="password" placeholder="Senha:" class="form-control tam" name="password" required>
            </div>

            <div id="botao">
                <input type="submit" name="botao" value="Alterar" class="btn-cad" />
            </div>
        </form>
    </div>
@endsection
