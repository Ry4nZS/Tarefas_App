<?php
include "./BD/banco.php"


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saturn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body class = 'bg-dark'>
  <!-- Formulario de registro-->
  <div class="b-example-divider"></div>

  <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog"
    id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h1 class="fw-bold mb-0 fs-2">Bem-vindo ao Todo-APP</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST" action="registro.php" class="">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-3" id="nome" placeholder="Digite seu nome.">
              <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-3" id="email" placeholder="nome@exemplo.com">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="senha" placeholder="Senha">
              <label for="floatingPassword">Senha</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="senhaconfirm" placeholder="Repita a Senha">
              <label for="floatingPassword">Confirme a senha</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Registrar!</button>
            <div class="d-grid">
              <a href="main.php" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">Voltar para página principal</a>
            </div>
            <small class="text-body-secondary">Ao se registrar você concorda com os termos de uso</small>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>