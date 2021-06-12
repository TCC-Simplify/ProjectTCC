@extends('layouts.fundo_padrao')

@section('links')
    <div class="links">
        <a href="{{ url('') }}" style="color: rgb(38, 109, 82);">Usuários</a>
        <a href="{{ url('') }}">Empresa</a>
        <a href="{{ url('') }}">Controle</a>
        <a class="log" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" onmouseover="getElementById('descricao').style.display='block'" onmouseout="getElementById('descricao').style.display='none'"><i class="fas fa-sign-out-alt"></i></a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <div id="descricao">Sair</div>
    </div>
@endsection

@section('opcoes')
    <div class="opcoes">
        <div class="a"><a href="{{ url('/cadastro_user') }}"><i class="fas fa-user-plus"></i></a></div>
        <div class="a"><a href="{{ url('') }}"><i class="fas fa-user-times"></i></a></div>
        <div class="a"><a href="{{ url('') }}"><i class="fas fa-user-edit"></i></a></div>
        <div class="a"><a href="{{ url('/users') }}"><i class="fas fa-users es"></i></a></div>
    </div>
@endsection

@section('direita')
    <div class="direita m-users">
        <h1>Exibindo usuários</h1>

        <table class="table table-striped table-red">
            <thead>
                <th>Nome</th>
                <th>Setor</th>
                <th>Cargo</th>
                <th>Controle</th>
            </thead>

            @foreach($todos as $user)
                <tbody>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->funcao }}</td>
                    <td><?php 
                       $aux = $user->permissao;
                       if($aux == 1){
                           echo 'Administrador';
                       }else if($aux == 2){
                            echo 'Gerente';
                       }else{
                            echo 'Funcionário';
                       }
                    ?></td>
                    <td><a href="{{ route('/alt_user', $user->id) }}"><i class="fas fa-user-edit ed"></i></a>&nbsp &nbsp &nbsp<a href="{{ route('/del_user', $user->id) }}"><i class="fas fa-user-times de"></i></a></td>
                </tbody>
            @endforeach
        </table>

        {{ $todos->links() }}
    </div>
@endsection