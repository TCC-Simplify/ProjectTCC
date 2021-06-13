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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

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

            .title{
                text-align: center;
                margin-top: 150px;
                margin-bottom: 50px;
            }

            .dev{
                height: 500px;
                text-align: justify; 
                padding-top: 100px;
                padding-left: 150px;
                box-shadow: 0px -11px 10px black;
            }
            .dev-mais{
                height: 550px;
                text-align: justify; 
                padding-top: 70px;
                box-shadow: 0px -11px 10px black;
            }

            .desc-dev{
                position: relative;
                padding-left: 600px;
                padding-right: 100px;
                padding-top: 45px;
            }

            .desc-mais{
                padding-left: 400px;
            }
            .ori{
                margin-bottom: 70px;
            }
            .equipe{
                margin-top: 70px;
            }

            .um{
                background-color: rgb(135, 202, 176);
            }

            .img1{
                float: left;
                margin-left: 240px;
            }

            .container-fluid{
                padding: 0;
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
                        <a href="{{ url('/') }}">Voltar</a>
                    @endif
                </div>
            @endif
            </div>
        </div>

        <h1 class="title">Nossa equipe</h1>

        <div class="container-fluid">
            <div class="dev um">
                <img src="{{ url('/imgs/welcome/caio.png') }}" alt="Caio Salina Modolo"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Caio Salina Modolo</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedor</p>
                    <br><br>
                    <h5>caio.modolo@unesp.br</h5> 
                </div>
            </div>

            <div class="dev dois">
                <img src="{{ url('/imgs/welcome/dayna.png') }}" alt="Dayna Caroline Domiciano do Prado"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Dayna Caroline Domiciano do Prado</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedora e Líder</p>
                    <br><br>
                    <h5>dayna.caroline@unesp.br</h5> 
                </div>
            </div>

            <div class="dev um">
                <img src="{{ url('/imgs/welcome/eduardo.png') }}" alt="Eduardo Coutinho Moreira Trovatto"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Eduardo Coutinho Moreira Trovatto</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedor</p>
                    <br><br>
                    <h5>eduardo.trovatto@unesp.br</h5> 
                </div>
            </div>

            <div class="dev dois">
                <img src="{{ url('/imgs/welcome/felipe.png') }}" alt="Felipe Akira Nozaki"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Felipe Akira Nozaki</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedor e Vice-líder</p>
                    <br><br>
                    <h5>felipe.nozaki@unesp.br</h5> 
                </div>
            </div>

            <div class="dev um">
                <img src="{{ url('/imgs/welcome/fernanda.png') }}" alt="Fernanda Castor Modolo"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Fernanda Castor Modolo</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedora</p>
                    <br><br>
                    <h5>fernanda.modolo@unesp.br</h5>
                </div>
            </div>

            <div class="dev dois">
                <img src="{{ url('/imgs/welcome/gabriel_m.png') }}" alt="Gabriel Oliveira De Morais"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Gabriel Oliveira De Morais</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedor</p>
                    <br><br>
                    <h5>gabriel.morais@unesp.br</h5> 
                </div>
            </div>

            <div class="dev um">
                <img src="{{ url('/imgs/welcome/gabriel_z.png') }}" alt="Gabriel Zaneta Pinheiro"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Gabriel Zaneta Pinheiro</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedor</p>
                    <br><br>
                    <h5>gabriel.zaneta@unesp.br</h5> 
                </div>
            </div>

            <div class="dev dois">
                <img src="{{ url('/imgs/welcome/isabela.png') }}" alt="Isabela De Castro Navarro"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Isabela De Castro Navarro</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedora</p>
                    <br><br>
                    <h5>isabela.navarro@unesp.br</h5> 
                </div>
            </div>

            <div class="dev um">
                <img src="{{ url('/imgs/welcome/jean.png') }}" alt="Jean Da Silva Beltrame"  width="300px" class="img1">
                <div class="desc-dev" width="600px" height="800px">
                    <h3>Jean Da Silva Beltrame</h3>
                    <br>
                    <p style="margin-top:-20px;">Desenvolvedor</p>
                    <br><br>
                    <h5>jean.beltrame@unesp.br</h5> 
                </div>
            </div>

            <div class="dev-mais dois">
                <div class="desc-mais ori" width="600px" height="800px">
                    <h3>Rodrigo Ferreira de Carvalho</h3>
                    <br>
                    <p style="margin-top:-20px;">Professor orientador</p>
                    <br>
                    <h5>rodrigo.carvalho@unesp.br</h5>
                </div>

                <hr>

                <div class="desc-mais equipe" width="600px" height="800px">
                    <h3>Equipe Simplify</h3>
                    <br>
                    <h5>tcc.simplify@gmail.com</h5>
                </div>
            </div>
        </div>
    </body>
</html>

