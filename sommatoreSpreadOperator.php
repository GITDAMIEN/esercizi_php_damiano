<?php

function summerf(...$numbers){

    $res = array_reduce($numbers, function($acc, $n){
        return $acc += $n;
    });

    return $res;
}

echo(summerf(1,34,5,5,5,6,6,44,4));