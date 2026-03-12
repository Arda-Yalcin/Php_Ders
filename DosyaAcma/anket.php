<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>





<?php 
    // Anket formu gönderildiğinde bu blok çalışıyor
    if(isset($_POST["secim"])){
        // Seçilen seçeneğe göre dosya yolunu oluşturuyoruz
        $yol="yazilar/".$_POST["secim"].".txt";
        // Dosyayı okuma modunda açıyoruz
        $dosya=fopen($yol,"r");
        // Dosyanın boyutunu alıyoruz
        $ebat=filesize($yol);
        // Dosyayı okuyoruz (içindeki sayı tutmu değeri)
        $deger=fread($dosya,$ebat);
        // Dosyayı kapatıyoruz
        fclose($dosya);
        // Okunan değeri 1 artırıyoruz (oy sayısı artar)
        $deger++;
        // Güncellenmiş değeri ekrana bastırıyoruz
        echo $deger;
        // Dosyayı yazma modunda yeniden açıyoruz
        $dosya=fopen($yol,"w");
        // Artan değeri dosyaya yazıyoruz
        fwrite($dosya,$deger);
        // Dosyayı kapatıyoruz
        fclose($dosya);
    }

?>



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Anket formu -->
            <form action="#" method="post">
                <!-- Anket sorusu -->
                <h3>Php Dersini ne kadar seviyorsun</h3>
                
                <!-- Seçenek 1: Az -->
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" id="" value="1" />
                        <label class="form-check-label" for=""> az </label>
                    </div>
                </div>
                
                <!-- Seçenek 2: Eh işte -->
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" id="" value="2" />
                        <label class="form-check-label" for=""> eh işte </label>
                    </div>
                </div>
                
                <!-- Seçenek 3: Orta -->
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" id="" value="3" />
                        <label class="form-check-label" for=""> orta </label>
                    </div>
                </div>
                
                <!-- Seçenek 4: Çok -->
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" id="" value="4" />
                        <label class="form-check-label" for=""> çok </label>
                    </div>
                </div>
                
                <!-- Formu göndermek için butonu -->
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" >
                        Gönder
                    </button>
                </div>
                
                <!-- Anket sonuçlarını göstermek için bölüm -->
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            // Klasör yolunu tanımlıyoruz
                            $klasorYolu="yazilar/";
                            // Toplam oy sayısı
                            $toplam=0;
                            // Her seçeneğin oy sayılarını tutacak dizi
                            $degerler=[];
                            // Klasörü açıyoruz
                            $klasor=opendir($klasorYolu);
                            // Klasördeki tüm dosyaları sırayla okuyoruz
                            while($dosya=readdir($dosya)){
                                // Tam dosya yolunu oluşturuyoruz
                                $tamYol=$klasorYolu.$dosya;
                                // Eğer klasör değilse (yani dosya ise)
                                if(!is_dir($tamYol)){
                                    // Dosyayı okuma modunda açıyoruz
                                    $oku=fopen($tamYol, "r");
                                    // Dosyanın boyutunu alıyoruz
                                    $ebat=filesize($tamYol);
                                    // Dosyayı okuyoruz (oy sayısı)
                                    $deger= fread($oku,$ebat);
                                    // Toplam oya ekliyoruz
                                    $toplam=$toplam+intval($deger) ;
                                    // Değeri diziye kaydediyoruz
                                    $degerler[]=intval($deger);
                                }
                            }
                            // Her seçeneğin yüzdesini hesaplayıp yazdırıyoruz
                            $adet+1;
                            foreach($degerler as $deger){
                                // Yüzdeyi hesaplıyoruz (seçenek sayısı * 100 / toplam)
                                $yuzde=$deger*100/$toplam;
                                // Yüzdeyi ekrana yazdırıyoruz
                                echo "<br> % $yuzde $adet";
                                // Seçenek sayacını artırıyoruz
                                $adet++;
                            }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
        
        
    </div>
</div>









        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"  ></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" ></script>
    </body>
</html>
      