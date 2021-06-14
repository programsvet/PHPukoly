<?php
$str= addslashes('retezecc "pomlcka"jojo');
echo abs(-5);
echo "<br>";
echo ceil(0.7);
echo "<br>";
echo ($str);
echo "<br>";
echo chr(43);
$pole1 = array("barva",4);
$pole2 = array("a", "b","c",10);
$spojeniarray = array_merge($pole1,$pole2);
var_dump ($spojeniarray);
$array1 = ['Jabko','Hruska','Hrozny','Meloun','Pomeranc','Banan','Jahody' ,'Kiwi','Mandarinky','Ananas',];
foreach ($array1 as $bla){
    echo $bla."<br>";
}
function vlastnifunkce($b){
   var_dump (round($b,2));
   
}


vlastnifunkce(39.2561);

