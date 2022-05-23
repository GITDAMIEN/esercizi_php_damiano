<?php

/*<!--Scrivere un codice che cacoli il BMI (indice di massa corporea) e che mi dia in console i risultati.

Normopeso: BMI 18.5-24.9
Sovrappeso: BMI 24.9-29.9
Obesità I grado: BMI 30- 34.9
Obesità di II grado: 35-39.9
Obesità di III grado: BMI 40-49.9
Superobesità: da BMI 50 in su.*/

$weight = readline("Insert your weight: \n");
$height = readline("Insert you height: \n");
// $weight = 70.8;
// $height = 1.76;

$bmi = round($weight / ($height*$height), 2);

echo("Your BMI is " . $bmi . ".\n");

if($bmi < 18.5){
    echo("You are underweight");
}else if($bmi < 24.9){
    echo("You are healthy");
}else if($bmi < 29.9){
    echo("You are overweight");
}else if($bmi < 34.9){
    echo("You are obese I grade");
}else if($bmi < 39.9){
    echo("You are obese II grade");
}else if($bmi < 49.9){
    echo("You are obese III grade");
}else{
    echo("You are superobese");
}


?>