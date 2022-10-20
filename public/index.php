<?php 
  session_start();

  if(!($_SESSION['mail'])){
    header('Location:./login.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizza à Bessa</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="shortcut icon"
      href="../favicon_io/favicon.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./css/home.css" />
  </head>
  <body>
    <header>
      <?php 
      include_once("./components/navbar/verificado-navbar.php"); 
      ?>
    </header>
    <main class="main">
      <div class="food">
        <div>
          <img
            class="alimento"
            src="https://bolichelitoralplaza.com.br/wp-content/uploads/2017/01/pizza.jpg"
            alt="Pizza"
            draggable="false"
          />
        </div>
        <div class="produtos">
          <div class="produto1">
            <p class="preco1">R$40,00</p>
            <p class="pizza"><b>Pizza</b></p>
          </div>
          <div class="produto2">
            <p class="preco2">R$10,00</p>
            <p class="pizza"><b>Coca-Cola(garrafa)</b></p>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
