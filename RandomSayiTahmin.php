<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        if(isset($_POST["sayi"])){
            $sayi=$_POST["sayi"];
            $rastgele=$_POST["rastgele"];
            $hak=$_POST["hak"];
            $hak++;

            if ($hak<5 && $rastgele=$sayi) {
                echo "Bildin",
            }
            elseif ($hak<5 && $rastgele != $sayi) {
                echo" $hak . hakkın kaldı";
            }
            elseif ($hak>=5) {
                echo " <h3>Kaybettin </h3> <p> Yeni Tur Yeni Heycan</p>"; 
                $hak=0;
                $rastgele=rand(1,10);
            }
        }
        else{ 
            $hak=0;
            $rastgele=rand(1,10);
        }    
    ?>
 
    <form action="#" method="post">
    <h3>Sayı Tutma Oyunu, Tuttuğum Sayıyı Tahmin Et! 5 Hakın Sonunda Bilmezsen Kazanamazsın </h3>
    <label for="sayi">Sayı</label>
    <input type="text" name="sayi">
    <input type="hidden" name="rastgele" value="<?php echo $rastgele; ?>">
    <input type="hidden" name="hak" value="<?= $hak; ?>">
    <input type="submit" value="Gönder">
    </form>

</body>
</html>