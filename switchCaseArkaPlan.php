<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php 
        if(isset($_POST["tema"])){
            $tema=$_POST["tema"];
            $arkaPlan="";$yaziRenk="";

            switch ($tema) {
                case '0':
                    $arkaPlan="black";
                    $yaziRenk="white";
                    echo "Arka Plan  =  ";
                   echo "$arkaPlan   +   $yaziRenk";
                break;
                
                case '1':
                    $arkaPlan="white";
                    $yaziRenk="black";
                    echo "Arka Plan  =  ";
                    echo "$arkaPlan   +   $yaziRenk";
                break;

                case '2':
                    $arkaPlan="pink";
                    $yaziRenk="blue";
                    echo "Arka Plan  =  ";
                    echo "$arkaPlan   +   $yaziRenk";
                break;
                
               
            }
        }
    ?>
    
    <style>
    body{
        background-color:<?= $arkaPlan ?>;
        color:<?= $yaziRenk ?>;
    }

    </style>
</head>
<body>
    
        <form action="#" method="post">
        <input type="radio" name="tema" value="0"> Koyu Tema <br> 
        <input type="radio" name="tema" value="1"> Acik Tema <br>
        <input type="radio" name="tema" value="2"> Pembe Tema <br>
        <input type="submit" value="temayi değiştir">
        </form>
    
</body>
</html>