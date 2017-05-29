<?php

include ('bd/db.php');

$gen = $_POST['gen'];

$check = "SELECT * FROM genres WHERE genre_name='".$gen."'";

if(mysqli_num_rows(mysqli_query($conn, $check)) >= 1)
{
    $response_array['status'] = 'gen_error';
}
else
{
    $sql= "INSERT INTO genres (genre_name) VALUES ('".utf8_encode($gen)."')";

    if(mysqli_query($conn, $sql))
    {
        $response_array['status'] = 'success';
    }
    else
    {
        $response_array['status'] = 'error';
    }
}

header('Content-type: application/json');
echo json_encode($response_array);
