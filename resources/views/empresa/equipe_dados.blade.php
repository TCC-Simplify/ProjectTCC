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
        <h1>{{ $nome }}</h1>
        </br>
        <h3>Dados das Atividades</h3>
        </br>
        <p>Aqui estarão dados e estatísticas sobre as atividades atribuídas à equipe.</p>
        <p>Área de atividades ainda está em desenvolvimento.</p>
        </br>
        <h3>Lista de Usuários</h3>
        <div class="form-cad">
            <div class="form-group">
                @php ($counter = count($usuarios))
                @foreach($usuarios as $usuario)
                    <input type="text" class="form-control" value="{{ $usuario->name }}" required>
                    @php($counter++)
                    @if($counter-1 != 1)
                    <form method="post" action="{{ url('/equipe/delete') }}">{!! csrf_field() !!}
                        <input type="hidden" name="usuario" value="{{ $usuario->id }}">
                        <input type="submit" name="submit" value="Remover" style="height:55px;background:none;border:none;
                        color:white;font-size:18px;font-weight:bolder;margin:0;padding:0;">
                    </form>
                    @endif
                @endforeach
                </br></br>
                <a href="{{ url('/equipe/add', $nome) }}" style="font-size:18px;font-weight:bolder;">Adicionar Novo Usuário</a>
            </div>
        </div>
    </div>
@endsection
