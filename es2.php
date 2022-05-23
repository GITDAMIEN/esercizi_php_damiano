
<?php

/*Creare un array di persone con nome, cognome e genere. Se il genere e’ M stampare “Buongiorno Sig.” e se e’ F stampare “Buongiorno Sig.ra”*/

$array = [
    ["name" => "Marco", "surname" => "Benigni", "genre" => "M"],
    ["name" => "Francesca", "surname" => "Mancini", "genre" => "F"],
    ["name" => "Dario", "surname" => "Coman", "genre" => "M"],
    ["name" => "Andrea", "surname" => "Nonbinary", "genre" => "NB"]
];

for($index = 0; $index < count($array); $index++){
    if($array[$index]["genre"]=="M"){
        echo("Buongiorno Signor ". $array[$index]["name"] . " ". $array[$index]["surname"].".\n");
    }
    else if($array[$index]["genre"]=="F"){
        echo("Buongiorno Signora ". $array[$index]["name"] . " ". $array[$index]["surname"].".\n");
    }
    else{
        echo("Buongiorno Signor@ ". $array[$index]["name"] . " ". $array[$index]["surname"].".\n");
    }
}

?>