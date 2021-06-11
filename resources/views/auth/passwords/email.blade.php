@extends('layouts.app_cad')

<!-- Main Content -->
@section('content')
<div class="tudo">
    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form email" role="form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}

            <div class="header">
                <a href="{{ url('/login') }}" class="volt"><p>&#8592;  Voltar</p></a>
                <a href="{{ url('/') }}"><img src="{{ url('/imgs/logo_simplify.png') }}" alt="Logo Simplify"  width="150px"></a>   
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control tam inp-email" placeholder="Email:" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="alert alert-success">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-email">
                        Receber email para redefinir a senha
                    </button>
                </div>
            </div>
        </form>      
    </div>
</div>
@endsection
