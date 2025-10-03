<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="UcuncuHafta.php" method="post">
        <input type="text" name="Sayi1" id="Sayi1"> <br>

        <input type="text" name="Sayi2" id="Sayi2">
        <input type="submit" value="Topla"><br> 
    
        <select name="Hangi_islem" id="islem">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
        </select>
    
    </form>

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