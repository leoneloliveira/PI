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
</script>