<?php
session_start();
if (!$_SESSION['logado']) {
  header('location:../');
}

?>

<!DOCTYPE html5>
<html>

<head>
  <title>Pagina</title>
  <meta charset="utf-8" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/sweetalert2.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
<div class="container-fluid d-flex align-items-center justify-content-center bg-secondary">
    <div class="content bg-secondary">
      <h2 class="text-center mb-4">Faça seu cadastro agora!</h2>
      <form class="mt-4">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="nomeCompletoTxt">Nome completo</label>
              <input type="text" class="form-control bg-primary text-light" maxlength="50" id="nomeCompletoTxt" name="nomeCompletoTxt" placeholder="Nome completo" />
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <label for="emailTxt">Email</label>
            <input type="email" class="form-control bg-primary text-light" maxlength="50" id="emailTxt" name="emailTxt" placeholder="fulano@exemplo.com" />
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="confirmaEmailTxt">Confirmar email</label>
              <input type="email" class="form-control bg-primary text-light" maxlength="50" id="confirmarEmailTxt" name="confirmarEmailTxt" placeholder="fulano@exemplo.com" />
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <label for="senhaTxt">Senha</label>
            <input type="senha" class="form-control bg-primary text-light" maxlength="50" id="senhaTxt" name="senhaTxt" placeholder="senha" />
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="confirmarSenhaTxt">Confirmar senha</label>
              <input type="password" class="form-control bg-primary text-light" maxlength="20" id="senhaTxt" name="confirmarSenhaTxt" placeholder="confirmar Senha" />
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <label for="cpfTxt">Cpf</label>
            <input type="cpf" class="form-control bg-primary text-light" maxlength="20" id="cpfTxt" name="cpfTxt" placeholder="cpf" />
          </div>
        </div>

        

        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <button id="cancelarBtn" type="button" class="btn btn-danger btn-block">
                CANCELAR
              </button>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <button id="confirmarBtn" type="button" class="btn btn-success btn-block">
              CADASTRAR
            </button>
          </div>
        </div>

    </div>
    </form>
  </div>
  fgfhghgh
</body>

<script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="js/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8">
  async function cadastrarDados(e) {
      const nomeCompletoTxt = $('#nomeCompletoTxt').val();
      const dataNascimentoTxt = $('#dataNascimentoTxt').val();
      const emailTxt = $('#emailTxt').val();
      const confirmarEmailTxt = $('#confirmarEmailTxt').val();
      const senhaTxt = $('#senhaTxt').val();
      const confirmarSenhaTxt = $('#confirmarSenhaTxt').val();
      const cpfTxt = $('#telefoneTxt').val();

      const config = {
        method: "post",
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          nomeCompleto: nomeCompletoTxt,
          dataNascimento: dataNascimentoTxt,
          email: emailTxt,
          senha: senhaTxt,
          telefone: telefoneTxt
        })
      };

      const  request = await fetch('.../controller/usuarios/cadastrarUsuario.php',config);
      const response = await request.json();
      if (response.status === 1){
        swal.fire('Atenção!','dados cadastrados com sucesso','success')
        .then(res => window.location.href = 'usuario.php');
      }else{
        swal.fire('Atenção!','Verifique as informações no form','error');
      }

    }

      $(document).ready(function() {

        $('#confirmarBtn').on('click', async function(e){
          await cadastrarDados(e);
        
        });

        $('#cancelarBtn').on('click', function(){
          window.location.href = '../index.php';
        });

      });

</script>

</html>