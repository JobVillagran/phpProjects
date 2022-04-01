<?php
    require_once 'header.php';
?>

<div>
    <h1>Login</h1>
    <p>No account? <a href="register.php">Register here!</a></p>

    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">LOGIN</button>
    </form>
</div>

 <?php
    require_once 'footer.php';
?>

