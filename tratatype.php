<?php

include("bd/db.php");

session_start();

include ('bd/db.php'); //vai fazer conecção a base de dados

if(isset($_SESSION['user']) && $_SESSION['type'] == 'admin'){ //se o utiliazador tiver com conta iniciada e for admin poderá executar as alterações
    $ID = $_GET['id'];
    $opera = $_GET['ope']; //valores a receber serão 'promo' para promover, e 'unpromo' para despromover

    if ($opera == 'promo')
    {
      $sql = "UPDATE users SET type_user='admin' WHERE id=".$ID."";
      # colocar aqui o código do AJAX para as validações
    }
    else{
      $sql = "UPDATE users SET type_user='user' WHERE id=".$ID."";
      # colocar aqui o código do AJAX para as validações
    }

    if ($conn->query($sql) === TRUE) {
        if ($conn->query($sql) === TRUE) {
            $response_array['status'] = 'success';
        } else {
            $response_array['status'] = 'error';
        }
    } else {

    }
}
else { //se o utiliazador tiver com conta iniciada ou não for admin recebrá uma notificação
  # colocar aqui o código do AJAX para as validações
}
