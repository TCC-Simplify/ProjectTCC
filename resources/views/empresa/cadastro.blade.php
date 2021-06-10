<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cadastrar</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('css/user_e_empresa/cadastro_e_login.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="tudo">
            <form action="{{ url('/cadastro_empresa')}}" method="post" enctype="multipart/form-data" class="form" onsubmit="return verifica()">
                <div class="header">
                    <a href="{{ url('/') }}" class="volt"><p>&#8592;  Voltar</p></a>
                    <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify"  width="150px"></a>   
                </div>
                <div class="etapas">
                    <h4 style="color: rgb(95, 185, 151);">Empresa</h4>
                    <img src="{{ url('/imgs/cad_empresa/seta.png') }}" alt="Logo Simplify"  width="70px">
                    <h4>Administrador</h4>
                </div>
                @include('layouts.form_empresa')
                <div id="botao">
                    <input type="submit" name="botao" value="Continuar" class="btn-enviar">
                </div>
            </form>
        </div>

        <script src="../framework/node_modules/js-brasil/js-brasil.js"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js'"></script>
        <script src="{{ asset('js/js/jquery-1.2.6.pack.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.maskedinput-1.1.4.pack.js') }}" type="text/javascript"></script>
        
    </body>

</html>



    