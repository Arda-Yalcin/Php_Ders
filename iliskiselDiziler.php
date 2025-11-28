<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        //? ilişkisel Dizi Tanımlama
        $ogrenci=["ad"=>"Arda","soyad"=>"Yalçin","matematik"=>100];
        $sayilar=[14,64,1,53,86,24];
        $sayilar2=[14,43,64,23,15,87];
        
        $kesisim=[array_intersect($sayilar,$sayilar2)];
        print_r($kesisim); //! İki Diziide de olan elemanları yazdırır.

       // asort($sayilar);    //! İlişkisel Dizilerde KUllanılır
       // arsort($sayilar);
       // rsort($sayilar);    //! Diziyi Ters yazar
       // krsort($sayilar);   //! Anahtar değerlerine göre sıralar
        ksort($sayilar);

        print_r($sayilar);


        // foreach($ogrenci as $key=>$Deger){
        //    echo "$key : $Deger \n";
        // }



    ?>
    
</body>
</html>