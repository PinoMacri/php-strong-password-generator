<?php
$caratteri = [
"a" => "a",
"b" => "b",
"c" => "c",
"d" => "d",
"e" => "e",
"f" => "f",
"g" => "g",
"h" => "h",
"i" => "i",
"l" => "l",
"m" => "m",
"n" => "n",
"o" => "o",
"p" => "p",
"q" => "q",
"r" => "r",
"s" => "s",
"t" => "t",
"u" => "u",
"v" => "v",
"z" => "z",

"A" => "A",
"B" => "B",
"C" => "C",
"D" => "D",
"E" => "E",
"F" => "F",
"G" => "G",
"H" => "H",
"I" => "I",
"L" => "L",
"M" => "M",
"N" => "N",
"O" => "O",
"P" => "P",
"Q" => "Q",
"R" => "R",
"S" => "S",
"T" => "T",
"U" => "U",
"V" => "V",
"Z" => "Z",

"0" => "0",
"1" => "1",
"2" => "2",
"3" => "3",
"4" => "4",
"4" => "5",
"6" => "6",
"7" => "7",
"8" => "8",
"9" => "9",

"!"=>"!",
"%"=>"%",
"?"=>"?",
"&"=>"&",
];
$string_password="La tua Password è: ";
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

<?php if(empty($_GET["lengthPassword"])) : ?>
    <form action="#" method="GET">
        <label for="generator-length">Lunghezza password</label>
        <input type="number" min="1" max="10" id="generator-length" name="lengthPassword">
        <button>Invia</button>
    </form>
<?php else : ?>
<?php 
echo $string_password;
$value_random=array_rand($caratteri, $_GET["lengthPassword"]); 
foreach ($value_random as $value_randoms => $valore) {
    echo  $valore;
}
?>
<?php endif ?>
</body>

</html>