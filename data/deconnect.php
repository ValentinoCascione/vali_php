<?php
    session_start();
    $_SESSION = array();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>disconnect</title>
</head>
<body>
<header></header>
    <p style="color:lightblue;">Vous êtes deconnecté</p>
    <p><a href="./index.php">Retour au menu</a></p>
</body>
<footer></footer>
</html>
