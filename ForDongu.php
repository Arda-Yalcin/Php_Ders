<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takvim</title>
</head>
<body>
    
    <?php 
    /*1900 den 2025 e kadar tarihi gösteren*/
    echo"Tarihler <select name= Tarihler>";
    echo"<option selected> 1923 </option>";
    for ($i=1900; $i <=2025 ; $i++) {
       echo"<option >  $i </option>";
    }
    echo "</select>";


    //? ilk Önce Tekrar Eden Kodu Bulup Etrafına For Döngüsü Yerleştirilir.

    /* 
    for ($i=0; $i <10 ; $i++) { 
        echo "$i Merhaba Dünya<br>";
    }

    for ($i=10; $i > 0 ; $i--) { 
        echo "$i Merhaba Dünya<br>";
    }
   */
    ?>





</body>
</html>