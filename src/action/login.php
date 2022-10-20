<?php 
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    require_once('./conexao.php');
    $db = conecta();


    if(isset($_POST['mail']) && isset($_POST['password'])){
        $mail = $_POST['mail'];
        $password = $_POST['password'];
    }

    try{
        
        $foundMail = 'SELECT * FROM tb_users where email = "'.$mail.'"';
        $executeMail = $db->query( $foundMail );
        $countMail = $executeMail->rowcount();
        
        $registros = $executeMail->fetchall();
        

        if ($countMail <= 0){
            header('Location: '.$_SERVER['HTTP_REFERER']);
            // Toast de email inválido
        }else if ($countMail > 0){
            $foundPassword = 'SELECT * FROM tb_users where email = "'.$mail.'" AND senha = "'.$password.'"';
            $executePassword = $db ->query( $foundPassword );
            $countPassword = $executePassword->rowcount();
            if($countPassword <= 0){
                header('Location: '.$_SERVER['HTTP_REFERER']);
                // Toast de senha inválida
            }else{
                $_SESSION['mail'] = $registros[0][2];
                $_SESSION['role'] = $registros[0][6];
                $_SESSION['nome'] = $registros[0][1];
                if($_SESSION['role'] === 'admin'){
                    header('Location: ./../painel-admin.php');
                }else{
                    header('Location:./../../public/index.php');
                }
            }
        }
    }catch(_){
        // Colocar um toast de erro de processamento!
    }



?>