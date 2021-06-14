<?php
const br="<br>";
function isValid($str1,$str2){
    echo strpos($str1,'chodí',);
    echo br;
    echo str_replace($str2,"",$str1);
}
$strA1 =  'Tak dlouho se chodí se džbánem pro vodu, až se ucho utrhne.
Už dlouho tu píšu, že šel tomuhle "štěstíčku" dost naproti. Napřed se Erbovou, která ovšem byla ještě zlatá proti tomu současnému pometlu, které neumí už vůbec nic, ale jako zlatokopka se neztratí.Inu Tomáši, je to tvrdé, ale varování bylo dost a holt když si někdo nedá říci, musí přijít facka pořádná.';
$strA2 = array('štěstíčku','Erbovou','se','dost','zlatokopka');
echo isValid($strA1,$strA2);