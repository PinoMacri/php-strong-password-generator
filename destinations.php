<?php
include __DIR__ . "./functions.php";


?>


<!-- TESTO DEL COMMENTO -->
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
        <input type="number" min="5" max="15" id="generator-length" name="lengthPassword">
        <button>Invia</button>
    </form>
<h3>Password Generata</h3>
<?php 
echo $string_password;
$value_random=array_rand($caratteri, $_GET["lengthPassword"]); 
foreach ($value_random as $value_randoms => $valore) {
   echo $valore;
} ;
?>
</body>
</html>
