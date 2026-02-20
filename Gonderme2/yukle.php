<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        //print_r($_FILES);
        if(isset($_FILES["dosya"])){
            $hedef="kisi/";
            $hedefDosya=$hedef.basename($_FILES["dosya"]["name"]);
            $Ad=$_POST["ad"];

            if(move_uploaded_file($_FILES["dosya"]["tmp_name"], $hedefDosya)){
                ?>  
                <img src="<?= $hedefDosya ?>" alt="">                            
                
                <?php
                echo"$Ad <br>";
            
            }
            else{   
                echo "Kayıt Başarısız";
            }
        }

    ?>  
   <a href="index.php">Önceki Sayfa</a>
    
</body>
</html>