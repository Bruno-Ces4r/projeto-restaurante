<nav class="navegacao">
    <div class="portfolio">
        <a href=""><img src="./../image/logo-wolf.png" alt="logo" class="img-logo"></a> <!--Criar uma logo minha-->
        <a href="./painel-admin.php">BC Developer</a>
    </div>
    <div class="navega">
        <div class="dropdown">
            <button class="dropbtn"><?php echo $_SESSION['nome']; ?></button>
            <div class="dropdown-content">
                <a href="#">Editar Perfil</a>
                <a href="#">Sair</a>
            </div>
        </div>
    </div>
</nav>