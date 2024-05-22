<?php



$user = 'root';
$password = 'Root';
$db = 'formulaires';
$host = 'localhost';



$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);





if($link)
{
    echo "connection_etablie";
}
else {
    die("Connection failed: " . mysqli_connect_error());
}


?>
