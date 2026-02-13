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
            $hedef="odevler/";
            $hedefDosya=$hedef.basename($_FILES["dosya"]["name"]);

            if(move_uploaded_file($_FILES["dosya"]["tmp_name"], $hedefDosya)){
                echo"Kayıt Başarılı";
            }
            else{   
                echo "Kayıt Başarısız";
            }
        }

    ?>  
   <a href="index.php">Önceki Sayfa</a>
    
</body>
</html>