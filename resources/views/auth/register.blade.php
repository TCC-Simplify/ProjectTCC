@extends('layouts.app_cad')
 
@section('content')
<div class="tudo">
        <form class="form" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div class="header">
                <a href="{{ url('/cadastro') }}" class="volt"><p>&#8592;  Voltar</p></a>
                <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify"  width="150px"></a>   
            </div>
            <div class="etapas">
                <h4 style="color: rgb(95, 185, 151);">Empresa</h4>
                <img src="{{ url('/imgs/cad_empresa/seta.png') }}" alt="Logo Simplify"  width="70px">
                <h4 style="color: rgb(95, 185, 151);">Administrador</h4>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control tam" name="name" placeholder="Nome:" value="{{ old('name') }}" required>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control tam" name="email" placeholder="Email:" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="cpf" type="text" class="form-control tam" name="cpf" placeholder="CPF:" value="{{ old('cpf') }}" required>

                    @if ($errors->has('cpf'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cpf') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('dt_nasc') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="dt_nasc" type="text" class="form-control tam" name="dt_nasc" placeholder="Data Nascimento:" value="{{ old('dt_nasc') }}" required>
                </div>
            </div>

            <input id="permissao" type="text" class="form-control tam" name="permissao" value="1" style="display: none;">

            <div class="form-group{{ $errors->has('funcao') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="funcao" type="text" class="form-control tam" name="Setor:" placeholder="Função:" value="{{ old('funcao') }}" required>

                    @if ($errors->has('funcao'))
                        <span class="help-block">
                            <strong>{{ $errors->first('funcao') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="password" type="password" placeholder="Senha:" class="form-control tam" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">

                <div class="col-md-6">
                    <input id="password-confirm" type="password" placeholder="Confime sua senha:" class="form-control tam" name="password_confirmation" required>
                    
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn-enviar aut">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
</div>
@endsection

