


<nav class="navegacao">
    <div class="portfolio">
        <a href="./index.php"><img src="./../image/logo-pizza.png" alt="logo" class="img-logo"></a> <!--Criar uma logo minha-->
        <a href="./index.php">Pizzaria BG</a>
    </div>

    <div class="navega">
        <a href="./index.php">Cardápio</a>
        <a href="./admins.php">Reserva</a>
        <a href="./painel.php">Minhas Reservas</a>

        
        <div class="dropdown">
        <button class="dropbtn"><?php echo($_SESSION['nome']); ?></button>
            <div class="dropdown-content">
                <a href='./../src/action/abort-session.php'>Sair</a>
            </div>
        </div>

    </div>
</nav>