<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["Sayi1"]))
    {

    $sayi1=$_POST["Sayi1"];
    $sayi2=$_POST["Sayi2"];
    $Hangi_islem=$_POST["Hangi_islem"];
    //$toplam=$sayi1+$sayi2;
    //echo $toplam;

    if($Hangi_islem==1){
        echo $sayi1+$sayi2;
    } 
    else if($Hangi_islem==2){
        echo $sayi1-$sayi2;
    }
    else if($Hangi_islem==3){
        echo $sayi1*$sayi2;
    }
    else if($Hangi_islem==4){
        echo $sayi1/$sayi2;
    }

    }
    
    else{echo "Lütfen sayi giriniz";}

    ?>
</body>
</html>