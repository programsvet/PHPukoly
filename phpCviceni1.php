<?php

function getPrice(float $Jmeno,string $Prijmeni){
$nformat=number_format($Jmeno, 2,',',' ');

return $nformat.$Prijmeni;
}
echo getPrice(52123.51243,' CZK');
?>