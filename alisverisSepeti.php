<?php
    $urunler=["Dumates"=>"Sırık Domates Çok Sulu Güzel",
              "Patates"=>"Ödemiş Patates",
              "Salatalık"=>"Yayladan Bol Sulu",
              "Ananas"=>"Çok Taze"];

if(!isset($_COOKIE["sepet"])){
    setcookie("sepet","",time()+60*60*24);
}
if(isset($_POST["urun"])){
   $sepet=$_COOKIE["sepet"];
   $sepet=$sepet.$_POST["urun"].",";
   setcookie("sepet",$sepet,time()+60*60*24);
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</head>
<body>

    <?php 
        var_dump($_COOKIE["sepet"]);
    ?>

    <div class="container">
        <div class="row mt-5">
            <?php 
                foreach($urunler as $key => $value) {?>
            <div class="col-md-4">
                <div class="card md-3">
                    <div class="card-body">
                        <h4 class="card-title"><?= $key ?></h4>
                        <p class="card-text"><?= $value ?></p>
                        <form action="#" method="post">
                            <input type="hidden" name="urun" value="<?= $key ?>">
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Sepete ekle
                            </button>
                            
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
            

             
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>