<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <?php 
        if(isset($_POST["metin"])){
            $yol="yazilar/".md5(time()).".txt";
            $dosya=fopen($yol,"w");
            fwrite($dosya,$_POST["metin"]);
            fclose($dosya);
        }
    ?>
<div class="container">
    <div class="row">
        <form action="#" method="post">
            <div class="mb-3">
                <label for="metin" class="form-label">Yazı</label>
                <textarea class="form-control" name="metin" id="metin" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">
                Kaydet
            </button>
            
        </form>
    </div>
    <div class="row mt-5">
        <?php 
            $klasor=opendir("yazilar/");
            while ($dosya=readdir($klasor)) {
                if(!is_dir($dosya)){
                    echo "$dosya <a href='oku.php?dosya=$dosya'>Oku</a>  <br>";
                    
                }
            }
        ?>
    </div>
</div>

  









    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">    </script> 
</body>

</html>