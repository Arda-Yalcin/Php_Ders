<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayı ne</title>
</head>
<body>
    <form action="#" method="get">
    <input type="text" name="Sayi" id="Sayi" required> <br>
    <input type="submit" value="Gönder"><br>
    </form>

    <?php
    if(isset($_GET["Sayi"]) && !empty($_GET["Sayi"]))
    {
        $sayi=$_GET["Sayi"];
        if($sayi>0)
        {
            echo "Sayı Pozitiftir";
        }
        else if ($sayi==0)
        {
            echo "Sayı Nötrdür";
        }
        else if($sayi<0)
        {
            echo "Sayı Negatiftir";
        }
    }
    else{echo "Lütfen sayi giriniz";}



    ?>
</body>
</html>