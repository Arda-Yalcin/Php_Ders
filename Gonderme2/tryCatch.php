<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        try {
            $klasor=opendir("kisi/");
            //klasoru aç.
            while($dosya=readdir($klasor)){
                //klasordeki dosyaları oku
                if(!is_dir($dosya)){
                    //okuduğun dosyamı?
                    ?>  
                        <div class="row">

                            <div class="card" style="width: 18rem;">
                            <img src="kisi/<?= $dosya ?>" class="card-img-top" alt="...">
                            </div>

                        </div>
                    <?php
                    
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    ?>
</body>
</html>