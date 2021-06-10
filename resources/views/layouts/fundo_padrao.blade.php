<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Simplify</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link href="{{ url('css/user_e_empresa/home_register.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(37, 37, 44); 
                color: #fff;
                font-family: 'Poppins', sans-serif;
                font-weight: 100;
                height: 100vh;
                width: 100vw;
                margin: 0;
                display: grid;
                grid-template-rows: 10vh 90vh;
            }

            .links > a{
                color: rgb(0, 0, 0);
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover{
                border-bottom: 1px solid rgb(155, 155, 155);
            }

            .links{
                text-align: right;
            }

            .opcoes > .a > a{
                color: rgb(0, 0, 0);
                font-size: 40px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .opcoes > .a > a:hover{
                color: rgb(37, 37, 44);
            }

            .opcoes{
                text-align: center;
                display: grid;
                grid-template-rows: 15vh 15vh 15vh 15vh;
            }

            .cima{
                background-color: red;
            }

            .tudo{
                background-color: green;
                display: grid;
                grid-template-columns: 90px auto;
            }

            .esquerda{
                background-color: rgb(38, 109, 82);
                padding-top: 10vh;
            }

            .direita{
                background-color: rgb(37, 37, 44);
                overflow: auto;
                text-align: center;
            }

            .navbar{
                height: 10vh;
            }

            .es{
                color: rgb(37, 37, 44);
            }

            #descricao{
                display:none; 
                position:absolute;
                width:100px; 
                background-color: rgba(150, 150, 150, 0.500);
                color: black;
                top:10px; 
                left: 1490px;
                text-align: center;
                border-radius: 4px;
            }
        </style>

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(), 
            ]); ?>
        </script>
    </head>
    <body>
        <div class="cima"></div>
        <div class="navbar fixed-top bg-light">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify"  width="250px"></a>
            </div>

            <div class="links">
                @yield('links')
            </div>
        </div>
        <div class="tudo">
            <div class="esquerda">
                @yield('opcoes')
            </div>
            @yield('direita')
        </div>
    </body>
</html>

