<?php
session_start();

if(isset($_SESSION['username'])){
    header("location:/");
}
session_start();

?>
<form action="/createAccount.php" method="post">
    <label for="email">email:</label>
    <input type="email" name="email" id="email" placeholder="Email"/>
    <label for="username">username:</label>
    <input type="text" id="username" name="username" placeholder="username"/>
    <label for="password">password:</label>
    <input type="password" id="password" name="password" placeholder="password"/>
    <input type="submit" value="sign up"/>
    <a href="login.php">if you have already account login </a>

</form>
