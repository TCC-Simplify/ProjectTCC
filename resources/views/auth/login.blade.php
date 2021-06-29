@extends('layouts.app_cad')

@section('content')
<div class="tudo">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form" role="form login" method="POST" action="{{ url('/login') }}">

                    <div class="header">
                        <a href="{{ url('/') }}" class="volt"><p>&#8592;  Voltar</p></a>
                        <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify"  width="150px"></a>   
                    </div>
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="fil">
                                <input id="email" type="email" class="form-control em tam" placeholder="Email:" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="fil">
                                <input id="password" type="password" class="form-control ses tam" placeholder="Senha:" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ses">
                            <div class="fil">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Lembre de mim
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <center>
                            <div class="fil">
                                <button type="submit" class="btn-enviar aut">
                                    Entrar
                                </button>
                            </div>

                            <br>

                                <a href="{{ url('/password/reset') }}">
                                    Esqueceu sua senha?
                                </a>
                            </center>

                            <hr>

                            <div class="form-group">
                            <a class="ir" href="{{ url('/cadastro') }}">
                                Fazer cadastro&#8594;
                            </a>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
