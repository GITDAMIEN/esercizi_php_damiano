
<?php
/*Scrivere un programma che calcoli la media di un array di numeri interi, considerando solo i numeri divisibili per 2*/

$ippopotamo = [1,2,3,4,5,6,7,8];
$sum = 0;
$tot = 0;

foreach($ippopotamo as $hippo){
    if($hippo%2==0){
        $sum += $hippo;
        $tot++;
    }
}

$avg = $sum/$tot;

echo("$avg \n");
print_r("$avg \n");
var_dump($avg);

?>