<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/forgot-password.css" />
    <link
      rel="shortcut icon"
      href="../favicon_io/favicon.ico"
      type="image/x-icon"
    />
    <title>Pizza à Bessa</title>
  </head>
  <body>
    <main class="content">
      <p class="voltar">
        <a href="./login.php">
          <img
            src="../image/arrow-left-bold.png"
            class="arrow-left"
            draggable="false"
          />
          <a href="./login.php">Voltar</a>
        </a>
      </p>
      <div>
        <div class="lock-login">
          <div class="image-forgot">
            <img
              class="forgot-password"
              src="../image/forgot-password.svg"
              alt="Forgot Password"
              draggable="false"
            />
          </div>
          <!--Necessário mudar a imagem -->
        </div>

        <div class="form-control">
          <h1 class="boas-vindas">Recuperação de Senha</h1>

          <form action="" class="formulario">
            <div class="controle-input">
              <input
                type="email"
                name="mail"
                id="mail"
                placeholder="Email"
                class="campos"
              />
            </div>
            <div class="controle-input">
              <!--Esconder campo e mostrar caso o usuário erre a senha-->
              <button type="submit" class="recuperar">Confirmar</button>
            </div>
            <p class="warning">
              Ao clicar no botão acima, enviaremos um e-mail com as isntruções
              para redefinir a senha
            </p>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
