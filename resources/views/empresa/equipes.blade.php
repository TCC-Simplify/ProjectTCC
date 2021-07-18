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
        <div class="a"><a href="{{ url('/empresa') }}"><i class="fas fa-city"></i></a></div>
        <div class="a"><a href="{{ url('/equipes') }}"><i class="fas fa-users es"></i></a></div>
    </div>
@endsection

@section('direita')
    <div class="direita cad_user">
        <h1>Lista de Equipes</h1>
        <div class="form-cad">
            @foreach ($equipes as $equipe)
            <div class="form-group">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome:" value="{{ $equipe->equipe }}" required>
            <div style="font-size:18px;font-weight:bolder;">
            <form method="post" action="{{ url('/deletar_equipe') }}">{!! csrf_field() !!}
                <a href="{{ url('/equipe', $equipe->equipe) }}" style="color:white;text-decoration:none;">Ver</a>&nbsp;&nbsp;
                <input type="hidden" name="equipe" value="{{ $equipe->id }}">
                <input type="submit" name="submit" value="Excluir" style="height:55px;background:none;border:none;
                color:white;font-size:18px;margin:0;padding:0;">
            </form>
            </div>
            </div>
            @endforeach
            <div style="font-size:18px;font-weight:bolder;"><a href="{{ url('/form_criar_equipe') }}">Cadastrar nova equipe</a></div>
        </div>
    </div>
@endsection
