<?php
const br="<br>";
//ADDSLASHES//
$str = "c:'prOgramfiles'";
echo addslashes($str);
echo br;
// CHR// 
$la = chr(130).chr(10);
echo $la;
echo br;
//EXPLODE//
print_r (explode('am',$str));
echo br;
//IMPLODE//
$pole = array('Je','nec');{
    $jedna = implode('di',$pole);
    echo $jedna;
}
echo br;
//JOIN//
echo join("",$pole);
echo br;
//md5//
echo md5($str);
echo br;
//HASH//
echo hash('md2',$str);
echo br;
//ORD//
$znak='+';
echo ord($znak);
echo br;
//STRCHR//
echo strchr("Nula Jedna Dva Tri ","Jedna");
echo br;
//STRLEN//
echo strlen($str);
echo br;
//STRPOS//
echo strpos($str,'files');
echo br;
//STRREV//
echo strrev($str);
echo br;
//STRSTR//
echo strstr($str,'files');
echo br;
//STRTOLOWER//
echo strtolower($str);
echo br;
//STRTOUPPER//
echo strtoupper($str);
echo br;
//SUBSTR_REPLACE//
echo substr_replace($str, '86',15);
echo br;
//SUBSTR//
echo substr("java python",4);
echo br;
//UCFIRST//
echo ucfirst('praha');
echo br;
//UCWORDS//
echo ucwords('praha plzen brno');