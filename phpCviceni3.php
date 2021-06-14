<?php
function getDPH(float $parametr, float $parametr2){
$str='DPH = ';
    return $str.$parametr/100*$parametr2;
}
$b=21;
$c=15;
$d=10;
echo getDPH(32,$b);
