
<div class="form-group">

{{ csrf_field() }}

<input type="text" class="form-control" name="nome" placeholder="Nome:" value="{{ $empresa->nome ?? old('nome') }}" required>
</div>

<div class="form-group">

<input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ:" value="{{$empresa->cnpj ?? old('cnpj') }}" required>
</div>

<div class="fil-2">
<div class="form-group">

    <input type="text" class="form-control" name="cep" placeholder="CEP:" id="cep" value="{{ $empresa->cep ?? old('cep') }}" required>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="form-group">

    <input type="text" class="form-control" name="estado" placeholder="Estado:" id="uf" value="{{ $empresa->estado ?? old('estado') }}" required>
</div>
</div>

<div class="fil-2">
<div class="form-group">

    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade:" value="{{ $empresa->cidade ?? old('cidade') }}" required>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="form-group">

    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro:" value="{{ $empresa->bairro ?? old('bairro') }}" required>
</div>
</div>

<div class="fil-2">
<div class="form-group">

    <input type="text" class="form-control" name="rua" id="endereco" placeholder="Rua:" value="{{ $empresa->rua ?? old('rua') }}" required>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="form-group">

    <input type="text" class="form-control" name="numero" placeholder="N°:" value="{{ $empresa->numero ?? old('numero') }}" required>
</div>
</div>

<div class="form-group">

<input type="text" class="form-control" name="complemento" placeholder="Complemento:" value="{{ $empresa->complemento ?? old('complemento') }}">
</div>


<div class="form-group">

<input type="password" class="form-control" name="senha" placeholder="Senha da empresa:" value="{{ $empresa->senha ?? old('senha') }}" required>
</div>

<div class="form-group">

<input type="password" class="form-control" name="confirma_senha" placeholder="Confirma senha:" value="{{ $empresa->confirma_senha ?? old('confirma_senha')   }}" required>
</div>




