<?php 

session_start();

if($_SESSION['mail'] !== "super@root.com" || $_SESSION['role'] !== 'admin'){
    header("Location:./../public/login.php");
}

require_once("./action/conexao.php");
$db = conecta();

$sql = "SELECT * FROM tb_products";

$query = $db->query( $sql );

$registros = $query->fetchall();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza BG</title>
    <link rel="stylesheet" href="./css/painel-admin.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./components/navbar/navbar.css">

    <link rel="shortcut icon" href="./../favicon_io/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include_once('./components/navbar/navbar.php'); ?>

    <h1>Incluir painel com as reservas</h1>
    
</body>
</html>