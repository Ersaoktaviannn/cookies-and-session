<?php
session_start();

// Redirect if already logged in
if(isset($_SESSION['username'])) {
    header("Location: Lat3_4a.php");
    exit();
}

// Check login credentials
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username === 'admin' && $password === 'admin') {
        $_SESSION['username'] = $username;
        header("Location: Lat3_4a.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) echo "<p style='color: red'>$error</p>"; ?>
    <form method="post" action="">
        <p>Username: <input type="text" name="username" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>