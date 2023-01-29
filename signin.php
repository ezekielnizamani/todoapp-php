<?php
include "databaseCon.php";

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from users WHERE email='$email'";
$result = $conn->query($sql);

if ($result){
    $user = $result->fetch_assoc();
    if (password_verify($password, $user["password"])) {
        $_SESSION['username'] =$user['username'];
        $_SESSION['userId'] =$user['id'];
        var_dump($_SESSION['username']);
        if(isset($_SESSION['username']) && isset($_SESSION['userId'])){
                    header("location:/");

        }

    } else {
        echo 'Invalid password.';
    }

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>