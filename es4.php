<!-- Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero e’ multiplo di 3, non deve stampare il numero ma “PHP”; se multiplo di 5 deve stampare “JAVASCRIPT”; se multiplo di 3 e 5 (15) deve stampare “HACKADEMY48”; -->

<?php

for($index=1;$index<=100;$index++){
    switch($index){
        case ($index%15 == 0) :
                                echo($index .": HACKADEMY48 \n");
                                break;
        case ($index%5 == 0) :
                                echo($index .": JAVASCRIPT \n");
                                break;
        case ($index%3 == 0) :
                                echo($index .": PHP \n");
                                break;
        default :
                    echo ($index . "\n");  
    }
}

?>