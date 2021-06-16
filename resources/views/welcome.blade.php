<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simplify</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(37, 37, 44);
                color: #fff;
                font-family: 'Poppins', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .links > a {
                color: rgb(0, 0, 0);
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: right;
            }
            .links > a:hover{
                border-bottom: 1px solid rgb(155, 155, 155);
            }

            .links{
                text-align: right;
            }
            
            .cadastre-se{
                padding-left: 100px;
                padding-top: 90px;
                text-align: justify; 
            }

            .desc-cad{
                position: relative;
                padding-left: 600px;
                padding-right: 100px;
                padding-top: 100px;
            }

            .img1{
                float: left;
            }

            .cad-but{
                text-align: center;
                margin-top: 40px;
            }

            .btn-cad{
                width: 200px;
                height: 50px;
                border-radius: 4px;
                color: #fff;
                background-color: rgb(95, 185, 151);
                cursor: pointer;
            }
            .btn-cad:hover, .btn-emails:hover{
                background-color: rgb(58, 141, 109);
            }

            /*.btn-comecar{
                margin-top: 30px;
                width: 200px;
                height: 50px;
                border: 1px solid rgb(95, 185, 151);
                border-radius: 4px;
                color: rgb(95, 185, 151);
                cursor: pointer;
                background-color: rgb(37, 37, 44);
            }
            .btn-comecar:hover{
                border: 1px solid #555;
                color: white;
                background-color: rgb(95, 185, 151);
            }*/

            
            .btn-comecar{
                margin-top: 30px;
                width: 200px;
                height: 50px;
                border: 1px solid #555;
                border-radius: 4px;
                color: #fff;
                cursor: pointer;
                background-color: #555;
            }
            .btn-comecar:hover{
                border: 1px solid rgb(61, 60, 60);
                color: white;
                background-color: rgb(61, 60, 60);
            }

            .sombra{
                margin-top: 230px;
                padding-top: 30px;
                background-color: rgb(135, 202, 176);
                margin-top: 230px;
                box-shadow: 0px -11px 10px black;
                border: none;
            }

            .publi-1{
                text-align: center;
                padding-left: 90px;
                padding-right: 90px; 
                background-color: rgb(135, 202, 176);
                color: rgb(37, 37, 44);
            }

            .sombrab{
                padding-top: 30px;
                background-color: rgb(135, 202, 176);
                box-shadow: 0px 11px 10px black;
                border: none;
            }

            .img2{
                margin-top: 20px;
            }

            hr{
                background-color: rgb(50, 50, 56);
                width: 85%;
            }

            .sobre{
                text-align: center;
                margin-top: 60px;
                padding-left: 90px;
                padding-right: 90px; 
                padding-bottom: 60px;
            }

            .btn-emails{
                margin-top: 30px;
                width: 250px;
                height: 50px;
                border: 1px solid #555;
                border-radius: 4px;
                background-color: rgb(95, 185, 151);
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="navbar fixed-top bg-light">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify"  width="250px"></a>
            </div>
                @if (Route::has('login'))
                <div class="links">
                    @if (Auth::check())
                        <a href="{{ url('/users') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    @endif
                </div>
                @endif
            </div>
        </div>

        <div class="container-fluid">
            <div class="cadastre-se">
                <img src="{{ url('/imgs/welcome/foto1.png') }}" alt="Mulher em home-office"  width="550px" class="img1">
                <div class="desc-cad" width="600px" height="800px">
                    <h1>O Simplify dá suporte à sua empresa home-office.</h1>
                    <br>
                    <h5>Realize o gerenciamento dos seus funcionários, com nosso sistema de ponto, organização das tarefas, overview de cada funcionário e de sua produtividade, mural de avisos e um chat para a comunicação de toda a empresa.</h5>
                    <div class="cad-but">
                        <a href="{{ url('/cadastro')}}"><button class="btn-cad">Cadastre-se &#8594;</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sombra"></div>
        <div class="publi-1">
            <h1>Comece cadastrando sua empresa e seus funcionários.</h1>
            <br>
            <h5>O Simplify ajuda você, empresário, a gerenciar sua empresa com eficiência e facilidade, reduzindo os custos e o tempo dos processos e tendo uma equipe mais automatizada.</h5>
            <div class="comeca-but">
                <a href="{{ url('/cadastro')}}"><button class="btn-comecar">Começar &#8594;</button></a>
            </div>
            <img src="{{ url('/imgs/welcome/foto2.png') }}" alt="Trabalhadores com computador"  width="1000px" class="img2">
        </div>
        <div class="sombrab"></div>

        <div class="sobre">
            <h1>Sobre a equipe Simplify!</h1>
            <br>
            <h5>Somos estudantes do 3° ano de informática, do Colégio Técnico Industrial "Prof. Isaac Portal Rondán". O Simplify é nosso projeto de TCC e o nosso orientador é o Professor Mestre Rodrigo Ferreira de Carvalho.</h5>
            <img src="{{ url('/imgs/welcome/foto3.png') }}" alt="Equipe Simplify"  width="1000px" class="img2">
            <div class="email-but">
                <a href="{{ url('/emails')}}"><button class="btn-emails">Entrar em contato &#8594;</button></a>
            </div>
        </div>
    </body>
</html>

