<?php 
session_start();

if(!isset($_SESSION["Sayi"]))   
{
    $_SESSION["Sayi"]=rand(1,100);
    $_SESSION["hak"] = 0;
    $_SESSION["basla"]=0;
}
if(isset($_POST["btn"])){
    $_SESSION["basla"]=1; $_SESSION["hak"]=1;
}
if(isset($_POST["girilenSayi"])){
    $GirilenSayi=$_POST["girilenSayi"];
    if($_SESSION["hak"]<5){
        $_SESSION["hak"]++;

        if($GirilenSayi==$_SESSION["Sayi"]){
            $_SESSION["mesaj"]="Kazandin";
            session_destroy();
            $_SESSION["basla"]=0;
        }
        else{
            $_SESSION["mesaj"]=$_SESSION["hak"].". Tekrar Dene";
        }
    }
    else{
        $_SESSION["mesaj"]="Oyun Bitti";
        session_destroy();
        $_SESSION["basla"]=0;
    }
}


?>

<!doctype html>
<html lang="en">
    <head>
        <title>Sayı Tahmin</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>


    <div class="mb-3">
        <label for="" class="form-label">Tahmininizi Giriniz</label> 
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" />
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    






    <form action="#" method="post">
        <input type="text" name="girilenSayi" pleaceholder="Tuttuğunuz Sayıyı Girin.">
        <input type="submit" value="Gönder"> 
    </form>

    <?php 

    print_r($_SESSION["Sayi"]);

    print("<br>");

    echo $_SESSION["mesaj"];    

    ?>





        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
