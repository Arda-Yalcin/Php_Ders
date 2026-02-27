<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">

    <?php  
    for($i=1;$i<7;$i++){
    ?>
        <label><?= $i ?> .Sayı</label>
        <input type="text" name="sayi[]" min="1" max="49" placeholder="1-49 Arasında Sayı Girin">
        <br>
    <?php
    }
    
    ?>  
    <input type="submit" value="Gönder">
    </form>

    <?php 
       if(isset($_POST["sayi"])){
        $sayilar=$_POST["sayi"];
        $sansliSayilar=[];

        while(count($sansliSayilar)<6){
            $sansliSayi=rand(1,49);

            if(!in_array($sansliSayi,$sansliSayilar)){
                $sansliSayilar[]=$sansliSayi;
            }
        }

        print_r($sansliSayilar);
        print_r($sayilar);

       }
       $adet=0;
       foreach($sansliSayilar as $sansliSayi)
       {
            if(in_array($sansliSayi,$sayilar) ){
                echo "<br> $sansliSayi  Doğru  ";
                $adet++;

            }
                      
       }

       echo"<br> Toplam $adet Doğrunuz Var";



    
    ?>




   
   
</body>
</html>