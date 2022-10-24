<!-- <nav class="navbar">
    <li class="items"><a href="#">Cardápio</a></li>
    <li class="items"><a href="#">Reserva</a></li>
    <li class="items"><a href="#">Minhas Reservas</a></li>
</nav> -->



<nav class="navegacao">
    <div class="portfolio">
        <a href=""><img src="./../image/logo-wolf.png" alt="logo" class="img-logo"></a> <!--Criar uma logo minha-->
        <a href="./home.php">Pizzaria BG</a>
    </div>

    <div class="navega">
        <a href="./home.php">Cardápio</a>
        <a href="./admins.php">Reserva</a>
        <a href="./painel.php">Minhas Reservas</a>

        
        <div class="dropdown">
        <button class="dropbtn"><?php echo($_SESSION['nome']); ?></button>
            <div class="dropdown-content">
                <a href="#">Sair</a>
            </div>
        </div>

    </div>
</nav>