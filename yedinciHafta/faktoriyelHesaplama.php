<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktoriyel Hesap</title>
</head>
<body>
        <h1>Girdiginiz Sayinin Faktoriyelini Hesaplar</h1>
    <form action="" method="post">
    <input type="text" name="Sayi" placeholder="Lütfen Bir Sayi Giriniz" >
    <input type="submit" value="Hesapla">
    </form>

    <?php
    $sayi=$_POST["Sayi"];
    if(isset($_POST["Sayi"]))
    {   
        $fak=1;
        for ($i=2; $i <=$sayi ; $i++) { 
            $fak=$fak*$i;
        }
            echo $fak;
    }
    else{echo "Lütfen sayi giriniz";}




    ?>

</body>
</html>