<?php 
  session_start();

  if(isset($_SESSION['mail']) && $_SESSION['mail'] !== 'false'){
    require_once('./../src/action/conexao.php');
    $db = conecta();

    $sql = 'SELECT mesa,situation,date(dia_inclusao) FROM tb_reservation where reserved_by = "'.$_SESSION['nome'].'"';

    $query = $db ->query( $sql );
    if(!$query){
        die("Erro de processamento!");
    }else{
        $registros = $query->fetchall();
    }
  }else{
    header('Location: ./index.php');
  }


  function updateField($local){
    
    $update = "UPDATE tb_reservation SET situtation = 0 where mesa = '".$local."'";
  }

?>


<script>
    function updateSituation(local){
        typeof(local);
        console.log(local);
    }
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/my-reservations.css">
    <link rel="stylesheet" href="./components/navbar/verificado-navbar.css">
    <link
      rel="shortcut icon"
      href="../favicon_io/favicon.ico"
      type="image/x-icon"
    />
    <title>Pizza BG</title>
</head>
<body>
    <header>
        <?php 
            include_once("./components/navbar/verificado-navbar.php"); 
        ?>
    </header>
    <main>
    <!-- <div class='btn'>
        <a href='#openModal' class="btn-updt">Atualizar</a>
        <button class="btn-cancel">Cancelar</button>
    </div> -->
    
        <table>
            <thead>
                <tr>
                    <th>Dia</th>
                    <th>Início</th>
                    <th>Termino</th>
                    <th>Mesa</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $mesa = 0;
                    $situation = 1; 
                    $dia = 2;  
                    $index = 1;
                    foreach($registros as $dados){
                        $valueSituation = '';
                        $dados[$situation] == 1 ? $valueSituation = "Confirmado" : $valueSituation = "Cancelado";
                        echo('
                            <tr>
                                <td>'.$dados[$dia].'</td>
                                <td>18:00</td>
                                <td>22:00</td>
                                <td>'.$dados[$mesa].'</td>
                                <td>'.$valueSituation.'</td>
                                <td><a href="./../src/action/update.php?local='.$index.'" class="btn-updt">Confirmar</a></td>
                                <td><a href="./../src/action/cancel.php?local='.$index.'" class="btn-cancel">Cancelar</a></td>
                            </tr>
                        ');
                        $index += 1;
                    }


                ?>
            </tbody>
        </table>
    </main>

    <div id="openModal" class="modal">
        <a href="#fechar" title='Fechar' class="fechar">X</a>
        <div>
            <h1 class='modal-title'>Selecione a reserva desejada e altere!</h1>
            <form action="" class="formulario" method='POST'>
            <div class="controle-input">
                <label for="mesas">Escolha a mesa:</label>
              <select name='mesa' id="mesas" class="campos" required>
                <option value="date">Date</option>
                <option value="pizzala">Pizzala</option>[
                <option value="chief">Chief</option>
              </select>
              
            </div>
            <div class="controle-input">
            <div>
                <label for="data">Informe o dia desejado:</label>
                <input type="date" name="data" id="dia" min="" required class="campos"/>
            </div>
            <div>
                <label for="hora">Horário disponível:</label>
                <!-- <input type="time" id="hora" name='hora' class="campos"  min="18:00" max="22:00" required> -->
                <select name="hora" class="campos">
                  <option value="18:00:00">18:00 - 22:00</option>
                </select>
            </div>
              <p class="warning">
                  *No momento,estamos atendendo somente no horário acima!
              </p>
            <div>
              <label for="qtdPersons">Quantidade de pessoas:</label>
              <select name='qtdPersons' class='campos' required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            
            <br>
            <button type="submit" class="logar" onclick="reserva()">Reservar</button>
            <?php 
              if(!isset($_GET['reserva'])){
                exit();
              }else{
                $error = $_GET['reserva'];

                if($error == 'time'){
                  echo '<p class="error">Não é permitido fazer reserva em dia anterior ou após o início do horário disponível</p>';exit();
                }elseif($error == 'process'){
                  echo '<p class="error">Infelizmente ocorreu um erro de processamento na aplicação!</p>';
                  exit();
                }
              }
            
            ?>
            </div>
          </form>
        </div>
    </div>
    
</body>
</html>