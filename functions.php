<?php
function randomPassword(){
    $caratteri = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789-*/";
    $password_length = $_GET["pass_length"] ?? "";
    $pass="";
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, strlen($caratteri) - 1);
        $pass .= $caratteri[$n];
    }
    return $pass;
}
;
?>
