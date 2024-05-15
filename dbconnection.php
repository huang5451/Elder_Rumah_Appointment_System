<?php 
    $hostname= 'localhost';//'127.0.0.1'
    $username= 'root';
    $password='';
    $database='elder_rumah';

    $connection= mysqli_connect($hostname,$username,$password,$database);

    if($connection == false){
        die('error connecting to database' .mysqli_connect_error());
    } else{
        echo '';
    }

?>