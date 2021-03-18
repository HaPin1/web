<?php 
include'../secret.php';
session_start();
$_SESSION['secret'] = $secret; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>

<body>
    <a href="destination.php">Link</a>

</body>

</html>