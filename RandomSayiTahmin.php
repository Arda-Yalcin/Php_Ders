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

            if ($hak<5 && $rastgele==$sayi) {
                echo "Bildin";
            }
            elseif ($hak<5 && $rastgele != $sayi) {
                echo" $hak . hakkin kaldi";
            }
            elseif ($hak>=5) {
                echo " <h3>Kaybettin </h3> <p> Yeni Tur Yeni Heycan</p>"; 
                $hak=0;
                $rastgele=rand(1,10);
            }
            else{ 
            $hak=0;
            $rastgele=rand(1,10);
            }  
        }  
    ?>
 
    <form action="#" method="post">
    <h3>Sayi Tutma Oyunu, Tuttuğum Sayiyi Tahmin Et! 5 Hakin Sonunda Bilmezsen Kazanamazsin </h3>
    <label for="sayi">Sayi</label>
    <input type="text" name="sayi">
    <input type="hidden" name="rastgele" value="<?php echo $rastgele; ?>">
    <input type="hidden" name="hak" value="<?= $hak; ?>">
    <input type="submit" value="Gönder">
    <input type="submit" value="Yenile">
    </form>

</body>
</html>