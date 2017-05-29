<?php
include("bd/db.php");

session_start();

include ('bd/db.php'); //vai fazer conecção a base de dados

if(isset($_SESSION['user']) && $_SESSION['type'] == 'admin') //se o utiliazador tiver com conta iniciada pode entrar na página
{
    $ID = $_POST['id'];
    $BD = $_POST['bd'];

    $sql = "DELETE FROM ".$BD." WHERE id=".$ID."";

    if ($conn->query($sql) === TRUE) {
        $response_array['status'] = 'sucesso';
    } else {
        $response_array['status'] = 'erro';

    }
}
else //se o utiliazador não tiver conta iniciada ou não for admin será notificado de tal
{
        $response_array['status'] = 'erro_permi';
}

header('Content-type: application/json');
echo json_encode($response_array);
