<?php 
// conntect to database

$conn = mysqli_connect('localhost','said','test1234','pizza'); // servername, username, password, dbname

if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();

}


?>