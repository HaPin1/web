<html>

<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>

<body>
    <?php 
    include'../secret.php';

        ?>
        <a href="destination.php?secret=<?=$secret?>">clique</a>
</body>

</html>