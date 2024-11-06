<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Order Form</title>
</head>
<body>
<p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! | <a href="logout.php">Logout</a></p>
<p><u>Order Summary</u></p>
<?php
$num_cd_order = $_COOKIE['cd_order'];
$num_dvd_order = $_COOKIE['dvd_order'];
echo "Ordered CD: ".$num_cd_order." pieces <br>";
echo "Ordered DVD: ".$num_dvd_order." pieces <br>";
?>
<p><a href="Lat3_4a.php">Edit Order</a></p>
</body>
</html>