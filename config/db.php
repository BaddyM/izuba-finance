<?php

$host= 'localhost';
$user = 'root';
$database = 'izuba';
$password = '';

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    echo '<script>window.alert("Connection Failed")</script>';
}
?>