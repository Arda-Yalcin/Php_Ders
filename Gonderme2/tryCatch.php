<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Try-Catch bloğu: Hata oluşabilecek işlemleri güvenli şekilde yapıyor
        try {
            // "kisi/" klasörünü açıyoruz ve $klasor değişkeninde saklıyoruz
            $klasor=opendir("kisi/");
            // Klasördeki tüm dosyaları sırayla okuyoruz
            while($dosya=readdir($klasor)){
                // is_dir() ile okunan şey dosya mı yoksa klasör mü kontrol ediyoruz
                //"  ! işareti "değilse" anlamı taşır (yani KLASÖR DEĞİLSE)
                if(!is_dir($dosya)){
                    // Dosya ise bir kart (card) div oluşturuyoruz
                    // Dosyayı resim olarak gösteriyoruz
                    ?>  
                        <div class="row">
                            <!-- Bootstrap card bileşeni - fotoğrafı göstermek için -->
                            <div class="card" style="width: 18rem;">
                            <!-- Dosya yolunu src'ye yazarak resmi gösteriyoruz -->
                            <img src="kisi/<?= $dosya ?>" class="card-img-top" alt="...">
                            </div>

                        </div>
                    <?php
                    
                }
            }
        } 
        // Eğer hata oluşursa, catch bloğu hatayı yakalar ve mesajını gösterir
        catch (Exception $e) {
            // Hata mesajını ekranda gösteriyoruz
            echo $e->getMessage();
        }
    ?>
</body>
</html>