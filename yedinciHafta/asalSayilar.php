<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="Sayi">
        <input type="submit" value="hesapla">
    </form>

</form>

    <?php
    $sayi=$_POST["Sayi"];
    if(isset($_POST["Sayi"]))
    {
        for ($i=2; $i < $sayi ; $i++) { 
            if ($sayi % $i == 0) {
                break;
            }
        }

        if ($i == $sayi) {
            echo "sayi asaldır";
        } else {
            echo "Asal değildir";
        }
    }
    ?>

</body>
</html>