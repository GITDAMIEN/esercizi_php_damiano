<?php

/* ////////////// CONTROLLORE PASSWORD ///////////// */

//METODO PROCEDURALE

/*
$attempts = 3;
do{
    $password = readline("\nInserisci password: ");
    $count = 0;
    $countU = 0;
    $countL = 0;
    $countN = 0;

    //check length
    if(strlen($password)>=8)
        $count++;

    for($index=0;$index<strlen($password);$index++){
        //check for uppercase
        if($password[$index]>="A"&&$password[$index]<="Z")
            $countU++;
        
        // echo("Lettera " . $index . ", Uppercase correct: " . $correct . ", Count: " . $count ."\n");

        //check for lowercase
        if($password[$index]>="a"&&$password[$index]<="z")
            $countL++;

        // echo("Lettera " . $index . ", Lowercase correct: " . $correct . ", Count: " . $count ."\n");

        //check for number
        if($password[$index]>="0"&&$password[$index]<="9")
            $countN++;

        // echo("Lettera " . $index . ", Number correct: " . $correct . ", Count: " . $count ."\n");
        
    }
        
    if($countU)
        $count++;    
    if($countL)
        $count++;    
    if($countN)
        $count++;

    //check for special
    if(preg_match('@[/^£$%&*()}{#~><>,|=_?+¬-]@', $password))
        $count++;

    // echo($correct . "\n");

    //feedback to user
    if($count!=5){
        $attempts--;
        echo("\033c" . "La password deve essere almeno di 8 caratteri e contenere almeno 1 lettera minuscola, 1 lettera maiuscola, 1 numero e 1 carattere speciale\n");
        echo("Tentativi rimasti: " . $attempts . "\n");
    }

}while($count!=5&&$attempts);

if($count==5)
    echo("\033c" . "La password inserita va bene");
else
    echo("\033c" . "Tentativi terminati. Computer bloccato.");
*/


// METODO FUNZIONALE

$attempts = 3;

do{
    $password = readline("\nInserisci password: ");

    $length = strlen($password) < 8 ? false : true;
    $special = preg_match('@[/^£$%&*()}{#~><>,|=_?+¬-]@', $password);
    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if(!($length&&$special&&$upper&&$lower&&$number)&&$attempts){
        $attempts--;
        if($attempts){
            echo("\033c" . "La password deve essere almeno di 8 caratteri e contenere almeno 1 lettera minuscola, 1 lettera maiuscola, 1 numero e 1 carattere speciale\n");
            echo("Tentativi rimasti: " . $attempts . "\n");
        }
    }

}while(!($length&&$special&&$upper&&$lower&&$number)&&$attempts);

if($attempts)
    echo("\033c" . "La password inserita va bene.");
else
    echo("\033c" . "Tentativi terminati. Computer bloccato.");


// METODO MOSTRUOSO

$attempts = 3;

do{
    $password = readline("\nInserisci password: ");

    if(!((strlen($password) < 8 ? false : true)&&(preg_match('@[/^£$%&*()}{#~><>,|=_?+¬-]@', $password))&&(preg_match('@[A-Z]@', $password))&&(preg_match('@[a-z]@', $password))&&(preg_match('@[0-9]@', $password)))&&$attempts){
        $attempts--;
        if($attempts){
            echo("\033c" . "La password deve essere almeno di 8 caratteri e contenere almeno 1 lettera minuscola, 1 lettera maiuscola, 1 numero e 1 carattere speciale\n");
            echo("Tentativi rimasti: " . $attempts . "\n");
        }
    }

}while(!($length&&$special&&$upper&&$lower&&$number)&&$attempts);

if($attempts) echo("\033c" . "La password inserita va bene.");
else echo("\033c" . "Tentativi terminati. Computer bloccato.");