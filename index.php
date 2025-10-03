<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arda Yalçin</title>
</head>

<body>
    <?php
    $sayi=10;  $sayi2=2;
    $a="Arda Yalçin"; 
    /*
    +: toplama
    -: çıkarma
    *: çarpma
    /: bölme
    %: mod alma
    =: atama
    .: birleştirme
    */
    echo "Merhaba Dünya!<br>";
    echo "Merhaba $a <br>";
    echo "Toplam =".($sayi.$sayi2."<br>");
    echo ++$sayi."<br>";
    echo "$sayi + $sayi2 =".($sayi+$sayi2)."<br>";
    

    ?>

    <form action="ikinciHafta.php" method="post">
    <input type="text" name="Sayi1" id="Sayi1">
    <input type="reset" value="Temizle"> <br>

    <input type="text" name="Sayi2" id="Sayi2">
    <input type="submit" value="Topla"><br> 
    
    <hr>
    <input type="checkbox" name="secenek" id="">Bilişim <br>                
    <input type="radio" name="secenek2" id="" value="1">Evet    
    <input type="radio" name="secenek2" id="" value="0">Hayır

    <hr>
    <select name="Günler" id="Günler">
    <option value="1">Pazartesi</option>
    <option value="2">Salı</option>
    <option value="3">Çarşamba</option>
    </select>
    <hr>
    <textarea name="Adres" id="Adres" rows="10"></textarea>


    </form>
</body>

</html>