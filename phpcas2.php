<?php
// PHP Uvod do programovani cas 2//
        // Definice 2 promennych podle jmena a prijmeni//
        $Jmeno = "loi";
        $Prijmeni = "cap";
        // Promenne podle znamek z moodle//
        $JmenoPrijmeni1 = 5;
        $JmenoPrijmeni2 = 4;
        //Vypis jmena a prijmeni//
        if ($JmenoPrijmeni1 > $JmenoPrijmeni2) {
        echo $Jmeno ,"<br>", $Prijmeni,"<br>";
}
        // Vypis jmena za pomoci If//
        if ($JmenoPrijmeni1 > $JmenoPrijmeni2) {
        echo $Jmeno ,"<br>";
        }
        else { 
            echo $Prijmeni;
        }
        // Vypis prijmeni pomoci Else//
        if ($JmenoPrijmeni1 < $JmenoPrijmeni2) {
        echo $Jmeno ,"<br>";
        }
        else { 
            echo $Prijmeni , "<br>";
        }
        // Podminka s platnosti vnorene podminky//
        if ($Jmeno==$Jmeno){
            if($Prijmeni==$Prijmeni){
             echo 55;   
            }
       // 6x switch se vstupnim parametrem $JmenoPrijmeni1//
       switch ($JmenoPrijmeni1)
       {
           case "1";
               echo "Kaka";
               break;
           case "2";
               echo "Kaka";
               break;
           case "3";
               echo "Kaka";
               break;
           case "4";
               echo "Kaka";
               break;
           case "5";
               echo "Kaka";
               break;
           case "6";
               echo "Kaka";
               break;
       }  
       }
       ?>