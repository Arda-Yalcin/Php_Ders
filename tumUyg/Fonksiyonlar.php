<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
        $ad="Arda";

        //? Parametresiz
        function selam(){
            $ism="basar";
            echo "Merhaba ".$ism;
        }

        //? Parametreli
        function selamVer($s){    
            echo "Merhaba " .$s;
        }
       
        selamVer($ad);       
        selam();       

        //? Geriye Değer Döndüren
        function sayiTopla($x,$y){
            return $x+$y;
        }
        $sonuc=sayiTopla(30,60);
        echo " $sonuc ";
    ?> 
</body>
</html>