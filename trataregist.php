<?php

    include('bd/db.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);
    $pass2 = sha1($_POST['password_conf']);
    $gender = $_POST['gender'];

    $check = "SELECT * FROM users WHERE email='".$email."'";
    $check2 = "SELECT * FROM users WHERE username='".$username."'";

    $num = rand(1, 12);

    if($gender == "female")
    {
        $picture = "perfis/female".$num.".png";
    }
    else
    {
        $picture = "perfis/male".$num.".png";
    }

    if($pass == $pass2 && $pass != 'da39a3ee5e6b4b0d3255bfef95601890afd80709' && $pass2 != 'da39a3ee5e6b4b0d3255bfef95601890afd80709')
    {
        if(mysqli_num_rows(mysqli_query($conn, $check2)) >= 1)
        {
            $response_array['status'] = 'usr_error';
        }
        elseif (mysqli_num_rows(mysqli_query($conn, $check)) >= 1)
        {
            $response_array['status'] = 'email_error';
        }
        else
        {
            $sql= "INSERT INTO users (username, email, password, genre, picture) VALUES ('".utf8_encode($username)."','".$email."','".$pass."', '".$gender."', '".$picture."')";

            if(mysqli_query($conn, $sql))
            {
                $response_array['status'] = 'success';
            }
            else
            {
                $response_array['status'] = 'error';
            }
        }
    }
    else
    {
        $response_array['status'] = 'passwd_error';
    }

    header('Content-type: application/json');
    echo json_encode($response_array);