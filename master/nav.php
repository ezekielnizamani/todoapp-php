
<nav>
    <ul>
        <li>
            <a href="/">home</a>
        </li>
        <?php if(!isset($_SESSION['username'])) {
            echo ' <li>
            <a href="/login.php">login</a>
        </li>
        <li>
            <a href="/signup.php">Sign up</a>
        </li>';
        } else{
            echo '<li>
        <a href="/logout.php">Logout</a>

        </li>';
        }

            ?>


    </ul>
</nav>