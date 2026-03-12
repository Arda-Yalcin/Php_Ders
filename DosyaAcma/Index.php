<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <?php 
        // Form gönderildiyse metni dosyaya kaydetme işlemi
        if(isset($_POST["metin"])){
            // Benzersiz bir dosya adı oluşturuyoruz (MD5 hash + zaman damgası)
            $yol="yazilar/".md5(time()).".txt";
            // Dosyayı yazma modunda ("w") açıyoruz
            $dosya=fopen($yol,"w");
            // Formdan gelen metni dosyaya yazıyoruz
            fwrite($dosya,$_POST["metin"]);
            // Dosyayı kapatıyoruz
            fclose($dosya);
        }
    ?>
<div class="container">
    <div class="row">
        <!-- Metin yazma ve kaydetme formu -->
        <form action="#" method="post">
            <div class="mb-3">
                <label for="metin" class="form-label">Yazı</label>
                <!-- Metin alanı - kullanıcı buraya yazı yazıyor -->
                <textarea class="form-control" name="metin" id="metin" rows="3"></textarea>
            </div>

            <!-- Formu göndermek için butonu -->
            <button type="submit" class="btn btn-success">
                Kaydet
            </button>
            
        </form>
    </div>
    <!-- Kaydedilen yazıları listeleyen bölüm -->
    <div class="row mt-5">
        <?php 
            // yazilar klasörünü açıyoruz
            $klasor=opendir("yazilar/");
            // Klasördeki tüm dosyaları sırayla okuyoruz
            while ($dosya=readdir($klasor)) {
                // Eğer okunan şey klasör değilse (yani dosya ise)
                if(!is_dir($dosya)){
                    // Dosya adını ve "Oku" linkini yazdırıyoruz
                    // oku.php sayfasına dosya adını göndererek hangi dosyayı açacağını belirtiyoruz
                    echo "$dosya <a href='oku.php?dosya=$dosya'>Oku</a>  <br>";
                    
                }
            }
        ?>
    </div>
</div>

  









    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">    </script> 
</body>

</html>