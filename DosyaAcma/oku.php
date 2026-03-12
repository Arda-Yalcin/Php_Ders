<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?php 
                            // URL'den gelen dosya adı kontrol ediliyor
                            if(isset($_GET["dosya"])){
                                // Dosya yolunu oluşturuyoruz (klasör adı + dosya adı)
                                $yol="yazilar/".$_GET["dosya"];
                                // Dosyayı okuma modunda ("r") açıyoruz
                                $dosya=fopen($yol,"r");
                                // Dosyanın boyutunu alıyoruz (kaç byte olduğunu)
                                $ebat=filesize($yol);
                                // Eğer dosya boş değilse
                                if($ebat>0){
                                    // Dosyayı tamamen okuyoruz ve $yazilar değişkenine kaydediyoruz
                                    $yazilar=fread($dosya,$ebat);
                                }
                                // Dosyayı kapatıyoruz
                                fclose($dosya);
                                // Okunan metni ekrana yazdırıyoruz
                                echo "$yazilar";
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>












        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
