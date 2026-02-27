<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
        $ogrenci1=["ad"=>"Arda","Soyad"=>"Yalçın","Alan"=>"Bilisim"];
        $ogrenci2=["ad"=>"ali","Soyad"=>"gel","Alan"=>"metal"];
        $ogrenci3=["ad"=>"veli","Soyad"=>"git","Alan"=>"makine"];
        $ogrenciler=[$ogrenci1,$ogrenci2,$ogrenci3];

       // echo $ogrenciler[1]["Soyad"];

        $ogrenciler[]=["ad"=>"enes","Soyad"=>"Furkan","Alan"=>"Bilisim"];
        //print_r($ogrenciler[2]);
        foreach($ogrenciler as $ogrenci){
            
            foreach($ogrenci as $key=>$deger){
            echo "$key : $deger \n";
            }

        }   
    ?>
    </pre>
</body>
</html>