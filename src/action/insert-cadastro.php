<?php 
    date_default_timezone_set('America/Sao_Paulo');
    require_once('./conexao.php');
    $db = conecta();

    if(isset($_POST['fullName']) && isset ($_POST['mail']) && isset($_POST['password']) && isset($_POST['passwordRepeat'])){
        $fullName = $_POST['fullName'];

        $mail = $_POST['mail'];

        $password = $_POST['password'];

        $dia_inclusao = date("Y-m-d H:i:s");

        $role = 'user';

    }

    $sql = "INSERT INTO tb_users(nome,email,senha,dia_inclusao, role) values('$fullName', '$mail', '$password', '$dia_inclusao', '$role')";
    
    $query = $db->query( $sql );
    if(!$query){
        die("Erro ao Carregar");
    }else{
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

?>