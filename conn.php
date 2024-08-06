<?php

$db = mysqli_connect("localhost" , "root" , "", "db_par");

if(!$db){
    die("error : " . mysqli_connect_error());
}

?>