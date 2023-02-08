<?php
session_start();
$password = $_SESSION['pass'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Password Generata è <?= $password ?></h3>
<a href="http://localhost/php-strong-password-generator">INDIETRO</a>

</body>
</html>
