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

    if(isset($_POST["secim"])){
        $yol="yazilar/".$_POST["secim"].".txt";
        $dosya=fopen($yol,"r");
        $ebat=filesize($yol);
        $deger=fread($dosya,$ebat);
        fclose($dosya);
        $deger++;
        echo $deger;
        $dosya=fopen($yol,"w");
        fwrite($dosya,$deger);
        fclose($dosya);


    }

?>



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="#" method="post">
                <h3>Php Dersini ne kadar seviyorsun</h3>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" id="" value="1" />
                        <label class="form-check-label" for=""> az </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" id="" value="2" />
                        <label class="form-check-label" for=""> eh işte </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" id="" value="3" />
                        <label class="form-check-label" for=""> orta </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" id="" value="4" />
                        <label class="form-check-label" for=""> çok </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" >
                        Gönder
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $klasorYolu="yazilar/";$toplam=0;$degerler=[];
                            $klasor=opendir($klasorYolu);
                            while($dosya=readdir($dosya)){
                                $tamYol=$klasorYolu.$dosya;
                                if(!is_dir($tamYol)){
                                    $oku=fopen($tamYol, "r");
                                    $ebat=filesize($tamYol);
                                    $deger= fread($oku,$ebat);
                                    $toplam=$toplam+intval($deger) ;
                                    $degerler[]=intval($deger);
                                }
                            }
                            $adet+1;
                            foreach($degerler as $deger){
                                $yuzde=$deger*100/$toplam;
                                echo "<br> % $yuzde $adet";
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
      