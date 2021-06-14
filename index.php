
        <?php
        // PHP - Uvod do programovani - cas 1// 
        $a = true;
        $b = 15;
        $c = 15.3;
        $d = "loko";
        $e = "motiva";
        echo "$a <br>";
        echo "$b <br>";
        print "$c <br>";
        print "$d <hr>";    
        
        $f = $d . $e; 
        echo "$f <br>";
        
        echo "<img src=\"https://img-sa.com/wp-content/uploads/2020/06/isotipo.png\" width=\" 50\" height=\" 50\" <br>";
        echo "<br>";
        echo "\\";
        $array = ['+','-','/','*','++','--','+=','-=','*=','/=','==','!=','<','>','//','&&',!$a];
        var_dump($array);
        echo "<hr>";
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