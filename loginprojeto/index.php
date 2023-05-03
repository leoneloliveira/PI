<!DOCTYPE html5>
<html>

<head>
  <title>Login</title>
  <meta charset="utf-8" />
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="view/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="view/css/sweetalert2.min.css" type="text/css" />
  <link rel="stylesheet" href="view/css/stylehome.css" type="text/css" />
  <link rel="shortcut icon"  href="img/Logo.png" type="img/logo.png">
 <style>
  footer{
    display: block;
    font-family:Arial, Helvetica, sans-serif;
    font-size: .75rem;
    font-weight: 700;
    color: rgba(0,0,0,.87);
    margin-bottom: 1.25rem;
    margin-top: 2.5rem;   
  }
  li img{
    border:1px solid #fff;
    border-radius: 5px;
    height:30px;  
  }
  
.container-fluid{
  width: 100%;
  width: 100%;
  text-align: center;
  padding: 20px;
  background-image: linear-gradient(to right, #696969, #083263);
 

} 

.formulario {  
width:30% ;
text-align: center;
color: #000;
padding: 20px;
background-image: linear-gradient(to right, #696969, #083263);
margin-left:60%;
margin-top:3%;

box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 13.5px );
-webkit-backdrop-filter: blur( 13.5px ); 
border-radius: 10px;
border: 1px solid #000;
text-align: center;
}
.logo{
  position: absolute;
  left:20%;
  top: 30%;
}
@media(max-width: 768px) {
  .content {
    width: 99vw !important;
    background-color: #798c9f;
    text-align: center;   
  }
}

nav img{
  width:100px;
  filter: invert(100%)
}   

nav div p{
  position: absolute;
  left:8%;
  top: 2%;
  color:rgb(0,0,0);
  font-family:Arial, Helvetica, sans-serif;
}

nav p{
  position: absolute;
  left:85%;
  top: 2%;
  color:rgb(0,0,0);
  font-family:Arial, Helvetica, sans-serif;
}
  
 </style>

</head>
<body>
 <nav class="">
  <div>
    <img src="img/logo.png" alt="">
    <p>Login</p>
  </div>
  <p>Precisa de ajuda?</p>
 </nav>  
 <main>
  <div class="container-fluid d-flex align-items-center justify-content-center ">
    <div class=" logo row" >
      <div class="col-md-12 col-md-12 ">
      <img src="img/logo.png" alt="logo">
      </div>
      </div>
      <form method="post" class=" formulario ">
      <h2 class="text-center mb-4">LOGIN</h2>
        <div class="row text-center">       
        <div class="col-md-12 col-sm-12">
          <div class="form-group mb-4">
          <label for="loginTxt" class="control-label">usuario</label>
          <input type="email" 
                 class="form-control bg-light text-dark"
                 placeholder="Digite seu email"
                 name="loginTxt"
                 id="loginTxt"
                 maxlength="50"
                 required />
        </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="form-group ">
            <label for="senhaTxt" class="control-label">Senha</label>
            <input type="password" 
                 class="form-control bg-light text-dark"
                 placeholder="Digite sua senha"
                 name="senhaTxt"
                 id="senhaTxt"
                 maxlength="20"
                 required />
            </div>
            </div>
        </div>         
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
            <button id="loginBtn" type="button" class="btn btn-success btn-block btn-flex">
                ACESSAR
              </button>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
          <button id="confirmarBtn" type="button" class="btn btn-success btn-flex btn-block">
             CADASTRAR-SE
            </button>
          </div>
        </div>

    </div>
    </form>
</main>
 
  <footer>
    <div class="row" >    
    <div class=" atendimento col-md-3 col-sm-12 text-center">
    atendimento ao cliente
     <Ul style="list-style: none;">
      <li>Central de Ajuda</li>
      <li>Como Comprar</li>
      <li>Métodos de Pagamento</li>
      <li>Garantia Delta</li>
      <li>Devolução e Reembolso</li>
      <li>Fale Conosco</li>
      <li>Ouvidoria</li>
      <li>Preferências de cookies</li>     
    </Ul>
    </div>
    <div class="col-md-2 col-sm-12">    
     <Ul style="list-style: none;">
      <li>a</li>
      <li>b</li>
      <li>c</li>
      <li>d</li>
      <li>e</li>
      <li>f</li>
     </Ul>
    </div>
    <div class="pagamento col-md-3 col-sm-12 text-center" >
      <div class="pag">
        PAGAMENTO
      </div>    
     <Ul class="row" style="list-style: none;">     
      <li ><img src="img/hipercardLogo.png" alt="" width="70" height="70"></li>
      <li><img src="img/logomastercard.png" alt="" width="70" height="40"></li>
      <li><img src="img/visaLogo.png" alt="" width="70" height="60"></li>
      <li><img src="img/pixLogo.png" alt="" width="70" height="50"></li>
      <li><img src="img/logoAmeriaca.png" alt="" width="70" height="50"></li>
      <li><img src="img/logoBoleto.jpg" alt="" width="70" height="50"></li>     
     </Ul>
    </div>
    <div class="pagamento col-md-3 col-sm-12 text-center" >
      <div class="pag">
        SIGA-NOS
      </div>    
     <Ul class="row" style="list-style: none;">     
      <li ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
     <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </svg></li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
      <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
      </svg></li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg></li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
      </svg></li>  
     </Ul>
      </div>
    </div>
  </footer>
   <hr>
   <footer>
    <div class="direitos text-center">
      2023 Delta.Todos os direitos reservados
    </div>
   </footer>
</div>
</body>    

<script src="view/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="view/js/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="view/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#loginBtn').on('click', async function(e) {
      e.preventDefault();

      const config = {
        method: "post",
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          login: $('#loginTxt').val(),
          senha: $('#senhaTxt').val()
        })
      };
      const request = await fetch('controller/login/logar.php', config);
      const response = await request.json();

      alert(`status: ${JSON.stringify(response)}`);
      if (response.status === 1) {
        window.location.href = 'view/usuarios.php';
      }
      else {
        Swal.fire({
          title: 'Atenção!', 
          text: 'Login ou senha incorretos',
          icon: 'error'
        });
      }
    });
  });
  $(document).ready(function() {
$('#confirmarBtn').on('click', function(){
  window.location.href = 'view/usuario.php';
});

});
</script>
</script>

</html>