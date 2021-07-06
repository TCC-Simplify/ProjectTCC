<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cadastrar</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('css/user_e_empresa/cadastro_e_login.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@vsilva472/jquery-viacep/dist/jquery-viacep.min.js"></script>
        <script src="<?php echo asset('js/jquery.maskedinput-1.1.4.pack.js')?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/funcs_cad_empresa.js')?>"></script> 
    </head>

    <body>
        <div class="tudo">
            <form action="{{ url('/log/muda_senha')}}" method="post" id="form" enctype="multipart/form-data" class="form" data-viacep>
                <div class="header">
                    <a href="{{ url('/') }}" class="volt"><p>&#8592;  Voltar</p></a>
                    <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify"  width="150px"></a>   
                </div>
                <div class="etapas">
                    <h4 style="color: rgb(95, 185, 151);">Configure sua senha</h4>
                </div>
                <div class="form-group pas">
                    {{ csrf_field() }}
                    <input type="password" class="form-control" id="senha2" name="senha" placeholder="Confirma senha:" required>
                    <button type="button" onclick="mostrarSenha2()" class="ver"><i class="fas fa-eye"></i></button>
                </div>
                <div id="botao">
                    <input type="submit" name="botao" value="Continuar" class="btn-enviar">
                </div>
            </form>
        </div>   
    </body>

</html>



    