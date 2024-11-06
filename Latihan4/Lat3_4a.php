<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$cd_value = isset($_COOKIE['cd_order']) ? $_COOKIE['cd_order'] : "0";
$dvd_value = isset($_COOKIE['dvd_order']) ? $_COOKIE['dvd_order'] : "0";
?>
<html>
<head>
<title>Order Form</title>
</head>
<body>
<p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! | <a href="logout.php">Logout</a></p>
<form action="Lat3_4b.php" method="post">
<p> Order CD, amount:
<input type="text" name="cd_order" value="<?php echo $cd_value; ?>" size="2" maxlength="2">
</p>
<p> Order DVD, amount:
<input type="text" name="dvd_order" value="<?php echo $dvd_value; ?>" size="2" maxlength="2">
</p>
<input type="submit" value="Add To Cart" name="submit">
</form>
<p><a href="Lat3_4c.php">View Cart</a></p>
</body>
</html>