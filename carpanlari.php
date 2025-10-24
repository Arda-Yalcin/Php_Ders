<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çarpanlarına Ayırma</title>
</head>
<body>

    <form action="" method="post">
    <input type="text" name="Sayi" placeholder="Lütfen Bir Sayi Giriniz" >
    <input type="submit" value="Hesapla">
    </form>

    <?php
    $sayi=$_POST["Sayi"];
    if(isset($_POST["Sayi"]))
    {   
        
        for ($i=1; $i <=$sayi ; $i++) { 
            $top=$sayi%$i;
            
            if($top==0){
                echo $i." ";
            }
            
        }

            
    }
    else{echo "Lütfen sayi giriniz";}


    ?>
</body>
</html>