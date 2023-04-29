<?php
$peso = 81.3;
$altura = 1.82;
$imc = $peso/($altura*$altura);
if($imc<18.5){
    echo"abaixo do peso";}
elseif($imc >=25 && imc > 25){
    echo"peso ideal";}
elseif($imc >=25 && imc <= 30){
    echo"acima do peso";}
    else{
        echo"obsidade";
    }
?>