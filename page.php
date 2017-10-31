<?php 

function Multiplication($tableau){
    $i=0;
    while ($i<11){
    echo ($tableau.'x'.$i."=".$tableau*$i."</br>");
    $i++;
    }
}
Multiplication(8);


