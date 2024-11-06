<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Destroy the session
session_destroy();

// Clear order cookies
setcookie('cd_order', '', time()-3600, '/');
setcookie('dvd_order', '', time()-3600, '/');

// Redirect to login page
header("Location: login.php");
exit();
?>