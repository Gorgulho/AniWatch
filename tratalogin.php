<?php
session_start();

include('bd/db.php');

$user = $_POST['username'];
$pass = SHA1($_POST['password']);

$res = mysqli_query($conn,"SELECT * FROM users WHERE email='".$user."' OR username='".$user."'");

$row = mysqli_fetch_array($res);

if($row['password'] == $pass)
{
	$_SESSION['user'] = $row['username'];
	$_SESSION['type'] = $row['type_user'];
	//header("Location: inicial.php");
	$response_array['status'] = 'success';
}
else
{
	$response_array['status'] = 'error';
}

header('Content-type: application/json');
echo json_encode($response_array);