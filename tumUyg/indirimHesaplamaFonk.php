<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" method="post">
        <input type="text" name="Fiyat" placeholder="Ürün Fiyatı Girin">

        <select name="Oran" id="">
            <option value="10" >%10</option>
            <option value="20" >%20</option>
            <option value="30" >%30</option>
            <option value="40" >%40</option>
            <option value="50" >%50</option>
        </select>

        <input type="submit" value="Hesapla">
    </form>


    <?php 

        function indirimHesapla($fi,$or){
            return $fi*(100-$or)/100;
        }
        if(isset($_POST["Fiyat"])){

            $Fiyat = $_POST["Fiyat"];
            $oran = $_POST["Oran"];

            echo "İndirimli Fiyat : ".indirimHesapla($Fiyat,$oran);

        }

    
    ?>

</body>
</html>