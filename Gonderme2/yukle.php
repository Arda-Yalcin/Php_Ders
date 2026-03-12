<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Dosya yükleme işlemi başlıyor
        // $_FILES dizisi kullanıcı tarafından yüklenen dosyanın bilgilerini içerir
        // isset() ile dosya gönderilip gönderilmediğini kontrol ediyoruz
        if(isset($_FILES["dosya"])){
            // Dosyanın kaydedileceği hedef klasör
            $hedef="kisi/";
            // Yüklenecek dosyanın tam yolu (klasör + dosya adı)
            // basename() fonksiyonu sadece dosya adını alır
            $hedefDosya=$hedef.basename($_FILES["dosya"]["name"]);
            // Formdan gelen ad soyadı bilgisini alıyoruz
            $Ad=$_POST["ad"];

            // Geçici konumdaki dosyayı hedef klasöre taşıyoruz
            // move_uploaded_file() başarılı olursa TRUE döndürür
            if(move_uploaded_file($_FILES["dosya"]["tmp_name"], $hedefDosya)){
                // Dosya başarıyla yüklendiğse, yüklenen resmi ekranda gösteriyoruz
                ?>  
                <img src="<?= $hedefDosya ?>" alt="">                            
                
                <?php
                // Kullanıcının adı soyadını yazdırıyoruz
                echo"$Ad <br>";
            
            }
            else{   
                // Dosya yükleme başarısız olursa hata mesajı yazdırıyoruz
                echo "Kayıt Başarısız";
            }
        }

    ?>  
    <!-- Önceki sayfaya dönmek için link -->
    <a href="index.php">Önceki Sayfa</a>
    
</body>
</html>