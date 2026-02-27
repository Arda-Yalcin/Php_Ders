<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    //! Diziye Değişken atama
    $gunler=["Pazartesi ","Sali "];
    $gunler[]="çarşamba ";
    
    //! Dizinin istenen elamanını çağırma
    echo $gunler[0];
    
    //! Diziyi Komple Yazdırma
    foreach($gunler as $gun){
        echo "$gun <br>";
    }
    
    //? Dizinin Eleman Sayısı
    $adet=count($gunler);

    //! Foreach in for hali
    for($i=0; $i<$adet ;$i++){
        echo $gunler[$i];
    }
    
    //! Dizide Varmı
    $varmi=in_array("cuma",$gunler);
    if(in_array("cuma",$gunler)){
        echo "Hayirli Cumalar";
    }



    ?>



</body>
</html>