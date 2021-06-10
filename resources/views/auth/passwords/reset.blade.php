@extends('layouts.app_cad')

@section('content')
<div class="tudo">
    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form email" role="form" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}

            <div class="header">
                <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify"  width="150px"></a>   
            </div>

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control tam inp-reset" placeholder="Email:" name="email" value="{{ $email or old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control tam" placeholder="Senha:" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="col-md-6">
                    <input id="password-confirm" type="password" placeholder="Confirmar senha:" class="form-control tam" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-email">
                        Redefinir senha
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
