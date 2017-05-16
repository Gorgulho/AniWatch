<?php
include("bd/db.php");

session_start();

include ('bd/db.php'); //vai fazer conecção a base de dados

if(isset($_SESSION['user']) && $_SESSION['type'] == 'admin') //se o utiliazador tiver com conta iniciada pode entrar na página
{
    $ID = $_GET['id'];
    $BD = $_GET['bd'];

    $sql = "DELETE FROM ".$BD." WHERE id=".$ID."";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script type="text/javascript">
    alert("Utilizador eliminado com sucesso");
    </script>
        <?php
        header('Location: administracao.php');
    } else {
        ?>
        <script type="text/javascript">
    alert(<?php  echo "Error deleting record: " . $conn->error; ?>);
    </script>
        <?php
        header('Location: administracao.php');
    
    }
}
else //se o utiliazador tiver com conta iniciada será rederecionado ao formulário de login/registo
{
        header('location:inicial.php'); //rederecionamento para o index
}
		
