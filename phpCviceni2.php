<?php
function getPriceDPH(float $cena,float $koeficient){
    $a= round ($cena*$koeficient,2);
    return $a; 
    
}
$b=0.1736;
$c=0.1304;
$d=0.0909;
echo getPriceDPH(40,$b);