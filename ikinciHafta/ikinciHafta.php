<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giris</title>
</head>
<body>
    <?php
    if(isset($_POST["Sayi1"]))
    {
    $sayi1=$_POST["Sayi1"];
    $sayi2=$_POST["Sayi2"];
    $toplam=$sayi1+$sayi2;
    echo $toplam;
    } 
    else{echo "Lütfen sayi giriniz";}

/*  
if (sart) {
    // sart dogru ise calisacak kod blogu
} else {
    // sart yanlis ise calisacak kod blogu
}   
    < Küçükmü
    > Büyükmü
    <= Küçük eşit mi
    >= Büyük eşit mi
    == Eşit mi
    != Eşit değil mi

    isset() değişken var mı ?

*/


    ?>
        
</body>
</html>