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
    $say=0;
    if(isset($_POST["Sayi"]))
    {   
        
        for ($i=1; $i <=$sayi ; $i++) { 
            $top=$sayi%$i;
            
            if($top==0){
                echo "$i <br>";
                $say+=1;     
            }
            
        }
        
            echo"Girilen ".$sayi." sayısının ".$say." kadar çarpanı var";
    }
    else{echo "Lütfen sayi giriniz";}


    ?>
</body>
</html>

//! girilen sayının mükemmel sayı olup olmadığını kontrol eden
//! girilen sayının Asal sayı olup olmadığı
//! TAU sayısı olup olmadığı
