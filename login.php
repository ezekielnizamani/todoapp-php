<?php
session_start();

if(isset($_SESSION['username'])){
    header("location:/");
}
session_start();

?>
<form action="signin.php" method="post">
    <label for="email">email:</label>
    <input type="email" name="email" id="email" placeholder="Email"/>

    <label for="password">password:</label>
    <input type="password" name="password" id="password" placeholder="password"/>
    <input type="submit" value="login"/>
    <a href="signup.php">Create account</a>

</form>

