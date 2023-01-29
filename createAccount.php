<?php
include "databaseCon.php";

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$hashdPassword =  password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (email, username, password)
VALUES ( '$email','$username','$hashdPassword')";

if (mysqli_query($conn, $sql)) {
    header("location:login.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>