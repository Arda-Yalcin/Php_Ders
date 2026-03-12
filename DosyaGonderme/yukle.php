<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Dosya gönderilip gönderilmediğini kontrol ediyoruz
        if(isset($_FILES["dosya"])){
            // Dosyanın kaydedileceği klasörü tanımlıyoruz
            $hedef="odevler/";
            // Hedef dosya yolunu oluşturuyoruz (klasör + dosya adı)
            // basename() sadece dosya adını alır, yolu kaldırır
            $hedefDosya=$hedef.basename($_FILES["dosya"]["name"]);

            // Dosyayı geçici konumdan hedef klasöre taşıyoruz
            // move_uploaded_file() başarılı olursa TRUE döndürür
            if(move_uploaded_file($_FILES["dosya"]["tmp_name"], $hedefDosya)){
                echo"Kayıt Başarılı";
            }
            else{   
                echo "Kayıt Başarısız";
            }
        }

    ?>  
    <!-- Önceki sayfaya dönmek için link -->
    <a href="index.php">Önceki Sayfa</a>
    
</body>
</html>