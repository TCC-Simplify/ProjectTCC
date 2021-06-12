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
    <div class="direita">
    
    </div>
@endsection
