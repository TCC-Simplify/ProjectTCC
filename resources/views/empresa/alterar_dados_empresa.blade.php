@extends('layouts.fundo_padrao')

@section('links')
    <div class="links">
        <a href="{{ url('/pag_user') }}">Usuários</a>
        <a href="{{ url('/empresa') }}" style="color: rgb(38, 109, 82);">Empresa</a>
        <a href="{{ url('/mural') }}">Controle</a>
        <a class="log" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" onmouseover="getElementById('descricao').style.display='block'" onmouseout="getElementById('descricao').style.display='none'"><i class="fas fa-sign-out-alt"></i></a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <!--<div id="descricao" name="descricao">Sair</div>-->
    </div>
@endsection

@section('opcoes')
    <div class="opcoes empresa">
        <div class="a"><a href="{{ url('/empresa') }}"><i class="fas fa-city es"></i></a></div>
    </div>
@endsection

@section('direita')
    <div class="direita cad_user">
        <h1>Alterar dados da empresa</h1>
        
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@vsilva472/jquery-viacep/dist/jquery-viacep.min.js"></script>
        <script src="<?php echo asset('js/jquery.maskedinput-1.1.4.pack.js')?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/funcs_cad_empresa.js')?>"></script> 
        <form action="{{ url('/update_empresa', $empresa->id)}}" method="POST" enctype="multipart/form-data" class="form-cad">
            <div class="form-group">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="nome" placeholder="Nome:" value="{{ $empresa->nome }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ:" value="{{ $empresa->cnpj }}" disabled>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="cep" data-viacep-cep placeholder="CEP:" id="cep" value="{{ $empresa->cep }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="estado" data-viacep-estado placeholder="Estado:" id="uf" value="{{ $empresa->estado }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="cidade" data-viacep-cidade placeholder="Cidade:" id="cidade" value="{{ $empresa->cidade }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="bairro" id="bairro" data-viacep-bairro placeholder="Bairro:" value="{{ $empresa->bairro }}" required>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="rua" id="endereco" data-viacep-endereco placeholder="Rua:" value="{{ $empresa->rua }}" required>
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="numero" placeholder="N°:" value="{{ $empresa->numero }}" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="complemento" placeholder="Complemento:" value="{{ $empresa->complemento }}">
            </div>
            
            <div class="form-group">
                <p class="cad-sen-p">Confirme a senha:</p><input id="password" type="password" placeholder="Senha:" class="form-control tam" name="password" required>
                <button type="button" onclick="mostrarSenha2()" class="ver"><i class="fas fa-eye"></i></button>
            </div>

            <div id="botao">
                <input type="submit" name="botao" value="Alterar" class="btn-cad" />
            </div>
        </form>
    </div>

    <script>
            $('#form').on( 'viacep.ajax.complete', function () {
                // remover o header para esta requisicao
                delete $.ajaxSettings.headers["X-CSRF-TOKEN"];
                var $this = $( this ), fields_to_block = ['cep', 'rua', 'bairro', 'cidade', 'estado'];

                fields_to_block.forEach(function (name) {
                    $this.find('[name="' + name + '"]').attr('disabled', true);
                });
            }).on('viacep.ajax.complete', function () {
                document.getElementById("#num").focus();
                // readicionar o header para outras requisições internas ao projeto.
                $.ajaxSettings.headers["X-CSRF-TOKEN"] = $('meta[name="csrf-token"]').attr('content');
            });
        </script>
@endsection
