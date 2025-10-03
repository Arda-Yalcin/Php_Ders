<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <input type="text" name="Sayi" id="Sayi" required> <br>
    <input type="radio" name="islem" id="kare" value="kare" checked> Kare 
    <input type="radio" name="islem" id="kup" value="kup"> Küp <br>
    <input type="submit" value="Gönder"><br>
    </form>

    <?php

    if(isset($_POST["Sayi"]) && !empty($_POST["islem"]))
    {
        $sayi=$_POST["Sayi"];
        $islem=$_POST["islem"];
        $ust=$_POST["Ust"];
        if($islem=="kare")
        {
            $sonuc=$sayi*$sayi;
            echo " $sayi <sup>2</sup> = ".$sonuc;
        }
        else if($islem=="kup")
        {
            $sonuc=$sayi*$sayi*$sayi;
             echo " $sayi <sup>3</sup> =".$sonuc;
        }
        elseif ($ust==i) {
            
        }
        

    }
    else{echo "Lütfen sayi ve işlem giriniz";}
    ?>
</body>
</html>