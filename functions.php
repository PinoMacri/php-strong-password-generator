<?php
//Random-Password-Function
function randomPassword(){
    $caratteri = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789-*/";
    // Input-Value-Form
    $password_length = $_GET["pass_length"] ?? "";
    // New-String-Randoms 
    $pass="";
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, strlen($caratteri) - 1);
        $pass .= $caratteri[$n];
    }
    return $pass;
}
;
?>
