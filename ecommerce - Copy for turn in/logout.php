<?php
session_start();

// Destroy sessions
session_destroy();

// back to login page
header("Location: login.html");
exit;
?>
