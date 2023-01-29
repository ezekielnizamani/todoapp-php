<?php
define('SERVER_NAME','localhost');
define('SERVER_USERNAME','root');
define('SERVER_PASSWORD','');
define('DB_NAME','todoapp');
$conn = mysqli_connect(SERVER_NAME,SERVER_USERNAME,SERVER_PASSWORD,DB_NAME);
if(!$conn){
    die('can not connect with mysql '.mysqli_connect_error());
}
?>