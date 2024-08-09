<?php
if (isset($_POST['submit-btn'])) {
    // check if admin log him in

    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" and $password == "admin") {
        session_start();
        $_SERVER['username'] = "admin";
        header("location: home.php");
    }
    echo "welcome admin ... ";
}

echo "fixing login bug";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <nav>
        <a href="#" style='color: red'>home</a>
        <a href="#" style='color: red'>login</a>
        <a href="#" style='color: red'>signup</a>
    </nav>
    <form action="login.php" method="post">
        Username: <input type="text" name="username" id=""> <br>
        Password: <input type="password" name="username" id=""><br>
        <input type="submit" value="Login" name="submit-btn">
    </form>
</body>

</html>