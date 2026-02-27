<?php  


if(!isset($_COOKIE["tema"])){
    setcookie("tema","dark",time()+60*60*24);
}


if(isset($_POST["tema"])){
   setcookie("tema", $_POST["tema"],time()+60*60*24);
   $_COOKIE["tema"]=$_POST["tema"];
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

 <style>
    .dark{
        background-color:black;
        color:white;
    }
    .light{
        background-color:white;
        color:black;
    }
</style>

</head>
<body class="<?=$_COOKIE["tema"]; ?>">
    
<form action="#" method="post">
    <input type="radio" name="tema" id="dark" value="dark">Koyu Tema <br>
    <input type="radio" name="tema" id="dark" value="light">Açık Tema <br>
    <input type="submit" value="Ayarla">
</form>




    

</body>
</html>