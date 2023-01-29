<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername,$username,$password,"todoapp");
if(!$conn){
    die('can not connect with mysql '.mysqli_connect_error());
}
?>