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

        try{

            $foundMail = 'SELECT * FROM tb_users where email = "'.$mail.'"';
            $executeMail = $db->query( $foundMail );
            $countMail = $executeMail->rowCount();
            
            if($countMail <= 0){
                $insertUser = "INSERT INTO tb_users(nome,email,senha,dia_inclusao,user_type) values('$fullName', '$mail', '$password', '$dia_inclusao', '$role')";
    
                $query= $db->query( $insertUser );
            if(!$query){
                die("Eroo ao Carregar");
            }else{
                header('Location:'.$_SERVER('Location: ./../../../public/login.php'));
            }
        }else{
            //Toast Email Inválido
        }
    }catch(_){}

    }
?>