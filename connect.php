<?php
    $server = "localhost";
    $user = "root";
    $password = "dell";
    $db = "project";

    $conn = mysqli_connect($server,"root","",$db);
    if(!$conn){
        die("Connection Failed ". mysqli_connect_error());
    }
?>

<?php
$connection = mysqli_connect('localhost', 'root', ''); // Host, DB user, Password 

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'user_list'); // Database Name

if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}



?>