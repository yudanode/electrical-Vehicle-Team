<?php 

$conn = mysqli_connect("localhost","root","","molikom-admin");

if(!$conn){
    die("database tidak tersambung!");
}else{
    echo "berhasil tersambung!";
}

?>