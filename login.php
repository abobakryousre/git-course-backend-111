<?php
if (isset($_POST['submit-btn'])) {
    var_export($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        Username: <input type="text" name="username" id=""> <br>
        Password: <input type="password" name="username" id=""><br>
        <input type="submit" value="Login" name="submit-btn">
    </form>
</body>

</html>