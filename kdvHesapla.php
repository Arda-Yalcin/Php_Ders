<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kdv Hesapla</title>
</head>
<body>
    <form action="#">
        <label for="Fiyat">Fiyatı Girin =</label>
    <input type="text" name="Fiyat" id=""> <br>
        <label for="Adet"> Adeti Girin = </label>
    <input type="text" name="Adet" id=""> <br>
    <select name="KdvOran" id=""> 
        <option value="1"> %1 </option>
        <option value="2">%20</option>
    </select> <br>
    <input type="submit" value="Hesapla"><br>
    </form>
    
    <?php
     if(isset($_GET["Fiyat"])){
        $Fiyat=$_GET["Fiyat"];
        $Adet=$_GET["Adet"];
        $KdvOran=$_GET["KdvOran"];
        
        if($KdvOran==1){
            $KdvFiyat=($Fiyat*0.01)*$Adet;
            $ToplamFiyat=($Fiyat*$Adet)+$KdvFiyat;
            echo "Kdv'li Fiyat: $ToplamFiyat";
        }
        else if($KdvOran==2){
            $KdvFiyat=($Fiyat*0.20)*$Adet;
            $ToplamFiyat=($Fiyat*$Adet)+$KdvFiyat;
            echo "Kdv'li Fiyat: $ToplamFiyat";
        }
        else{
            echo "Hatalı Kdv Oranı Girdiniz";
        }
     }
     else{
        echo "Lütfen Tüm Alanları Doldurun";
     }

    ?>

</body>
</html>