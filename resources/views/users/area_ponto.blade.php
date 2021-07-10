<!doctype html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Simplify</title>

    <style>
    html, body {
                background-color: grey; 
            }
        
    </style>
  </head>

  <body>


    <script type="text/javascript">
    $(window).on('load', function() {
        $('#modalPonto').modal('show');
    });
</script>


    <!-- Modal -->
    <form class="modal fade" action="{{ url('/ponto')}}" method="POST" enctype="multipart/form-data" id="modalPonto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      {{ csrf_field() }}  
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Horário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome Completo: </label>
                <br><input type="text" name="fnome" value="nome funcionario" disabled>    
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Empresa: </label>
                <br><input type="text" name="Enome" value="nome da empresa" disabled>
              </div>
              <div class="form-group">
                <label for="horario">Horário: </label>
                <h2 id="hora"></h2>
              </div>
              <div class="form-group">
                <label for="formMotivo">Motivo:</label>
                <select class="form-control" id="formMotivo" name="motivo">
                  <option value="1">Entrada</option>
                  <option value="2">Intervalo</option>
                  <option value="3">Saida</option>
                  <option value="4">Fim de expediente</option>
                </select>
              </div>


          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
        </div>
      </div>
  </form>
    <script>
    setInterval(function(){
    
    let novaHora = new Date(); 
    let hora = novaHora.getHours();
    let minuto = novaHora.getMinutes();
    let segundo = novaHora.getSeconds();
    minuto = zero(minuto);
    segundo = zero(segundo);
    document.getElementById('hora').textContent = hora+':'+minuto+':'+segundo;
},1000)
       function zero(x) {
    if (x < 10) {
        x = '0' + x;
    } return x;
}
    </script>
  </body>
</html>