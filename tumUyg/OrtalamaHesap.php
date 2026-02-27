<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Karne</title>
</head>
<body>
    <form action="#">
    <label for="Gun">Devamsızlık Günü =</label>
    <input type="text" name="Gun" id=""  ><br>

    <label for="Not1"> 1. Sınav Notu =</label>
    <input type="text" name="Not1" id="" ><br>

    <label for="Not2"> 2. Sınav Notu =</label>
    <input type="text" name="Not2" id="" ><br>

    <label for="Perf1"> 1. Performans Notu =</label>
    <input type="text" name="Perf1" id=""><br>

    <label for="Perf2"> 2. Performans Notu =</label>
    <input type="text" name="Perf2" id=""><br>

    <input type="submit" value="Hesapla"><br>

    </form>



    <?php 
    if(isset($_GET["Gun"]) && isset($_GET["Not1"]) && isset($_GET["Not2"]) && isset($_GET["Perf1"]) && isset($_GET["Perf2"])){
        //$Gun=$_GET["Gun"];
        //$Not1=$_GET["Not1"];
        //$Not2=$_GET["Not2"];
        //$Perf1=$_GET["Perf1"];
        //$Perf2=$_GET["Perf2"];
        extract($_GET);

        $Ortalama=(($Not1+$Not2+$Perf1+$Perf2)/4);
        if($Gun>10){
             echo "Devamsızlık Yüzünden Sınıfta Kaldınız : $Gun";
        }
        elseif($Ortalama<50){
            echo "Ortalama Yüzünden Sınıfta Kaldınız, Notunuz: $Ortalama -Geçmez";
        }
        elseif($Ortalama>50 && $Ortalama<60 && $Gun<10 ){
            echo " Geçtiniz, Notunuz: $Ortalama :geçer ";
        }
        elseif( $Ortalama>60 && $Ortalama<70 && $Gun<=10){
            echo "Geçtiniz, Notunuz:$Ortalama :Orta";
        }    
        elseif ($Ortalama>70 && $Ortalama<85 && $Gun<=10){
            echo "Geçtiniz, Notunuz:$Ortalama :İyi";
        }
        elseif ($Ortalama>85 && $Ortalama<=100 && $Gun<=10){
            echo "Geçtiniz, Notunuz:$Ortalama :Pekiyi";
        }
    }
    else{
        echo "Lütfen Tüm Alanları Doldurun";
    }
    ?>
</body>
</html>