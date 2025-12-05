<?php

if(!isset($_COOKIE["ad"])){
    setcookie("ad","Arda YALÇIN",time()+10);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    Merhaba
    <?php 
        echo $_COOKIE["ad"];
    ?>  

</body>
</html>