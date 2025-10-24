<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="Sayi" placeholder="Sayi Giriniz">
        <input type="submit" value="Hesapla">
    </form>

    <?php
    $sayi=$_POST["Sayi"];
    $top=0;
    if(isset($_POST["Sayi"]))
    {   
        
        for ($i=1; $i <$sayi ; $i++) { 
            if($sayi%$i==0){
                $top=$top+$i;
            }
        }
        if($top==$sayi){ echo "sayi müq";}
        else{ echo "sayi müq deil";}

    }
    else{echo "Lütfen sayi giriniz";}
    ?>
</body>
</html>