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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
                            
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
            

             
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>