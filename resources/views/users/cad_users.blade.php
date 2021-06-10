<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/cadastro_login.css') }}" rel="stylesheet">
    
</head>
<body>
    <div class="logo">
        <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify" align="left" width="180px"></a>
    </div>
    <br><br>
    <div>
        <h1>Cadastro de empresas</h1>
    </div>
    <br><br><br>

    <form action="{{ url('/cadastro_empresa')}}" method="post" enctype="multipart/form-data" class="form">

        <div class="form-group">

            {{ csrf_field() }}

            <input type="text" class="form-control" name="nome" placeholder="Nome:" value="{{ $users->nome ?? old('nome') }}">
        </div>

        <div class="form-group">

            <input type="text" class="form-control" name="email" placeholder="Email:" value="{{$users->email ?? old('email') }}">
        </div>

        <div class="form-group">

            <input type="text" class="form-control" name="cpf" placeholder="CPF:" value="{{ $users->cpf ?? old('cpf') }}">
        </div>

        <div class="form-group">

            <input type="text" class="form-control" name="dt_nasc" placeholder="Data de nascimento:" value="{{ $users->dt_nasc ?? old('dt_nasc') }}">
        </div>

        <div class="form-group">

            <input type="text" class="form-control" name="funcao" placeholder="Funcao:" value="{{ $users->funcao ?? old('funcao') }}">
        </div>

        <div class="form-group">

            <input type="text" class="form-control" name="permissao" placeholder="permissao:" value="{{ $users->permissao ?? old('permissao') }}">
        </div>

        <div class="form-group">

            <input type="text" class="form-control" name="password" placeholder="password:" value="{{ $user->session()->get('senha_empresa') ??  old('password') }}">
        </div>

       
        <div class="form-group">

            <input type="text" class="form-control" name="confirma_senha" placeholder="Confirma senha:" value="{{ $user->session()->get('senha_empresa') ??  old('confirma_senha)   }}">
        </div>
        <div class="form-group">

            <input type="text" class="form-control" name="ativo" placeholder="Ativo:" value="{{ $users->ativo ?? old('ativo') }}">
        </div><br><br>

        <div id="botao">
            <input type="submit" name="botao" value="Enviar:" class="btn-enviar" />
        </div>

    </form>
</body>
</html>