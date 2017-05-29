<?php
include("bd/db.php");

$username = $_POST['username'];
$email = $_POST['email'];
$pass = sha1($_POST['novapass']);
$pass2 = sha1($_POST['novapass_conf']);
$id = $_POST['id'];

$res = mysqli_query($conn,"SELECT * FROM users WHERE id='".$id."'");

$row = mysqli_fetch_array($res);

if($username != $row['username'])
{
    $check2 = "SELECT * FROM users WHERE username='".$username."'";

    if(mysqli_num_rows(mysqli_query($conn, $check2)) >= 1)
    {
        $response_array['status'] = 'usr_error';
    }
    else
    {
        $sql = "UPDATE users SET username='".$username."' WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            $response_array['status'] = 'success';
        } else {
            $response_array['status'] = 'error';
        }
    }

}

if($email != $row['email'])
{
    $check = "SELECT * FROM users WHERE email='".$email."'";

    if(mysqli_num_rows(mysqli_query($conn, $check)) >= 1)
    {
        $response_array['status'] = 'email_error';
    }
    else
    {
        $sql = "UPDATE users SET email='".$email."' WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            $response_array['status'] = 'success';
        } else {
            $response_array['status'] = 'error';
        }
    }

}

if($pass != "da39a3ee5e6b4b0d3255bfef95601890afd80709")
{
    if($pass == $pass2)
    {
        $sql = "UPDATE users SET username='".$username."' WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            $response_array['status'] = 'success';
        } else {
            $response_array['status'] = 'error';
        }
    }
    else
    {
        $response_array['status'] = 'passwd_error';
    }
}

header('Content-type: application/json');
echo json_encode($response_array);
