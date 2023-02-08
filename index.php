<?php
include "./functions.php";
session_start();
$_SESSION ["pass"] = randomPassword();
if (!empty($_SESSION['pass']))
    header('Location: destinations.php');
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
<form action="#" method="GET">
        <label for="generator-length">Lunghezza password</label>
        <input type="number" min="5" max="15" id="generator-length" name="pass_length">
        <button>Invia</button>
    </form>
</body>

</html>