<html>

<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>

<body>
    <?php
    include("../secret.php");
    setcookie('secret',  $secret, time() + 365243600, null, null, false, true);
    ?>
    <a href="destination.php">Link</a>
</body>

</html>