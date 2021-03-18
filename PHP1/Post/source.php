<html>

<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>

<body>
    <?php
    include'../secret.php';
    ?>

    <form method="post" action="destination.php">
        <input type="hidden" name="texte" value="<?= $secret ?>" />
        <input type="submit" value="Valider" />
    </form>
</body>

</html>