<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: Sepet.php');
    exit();
}
if(isset(($_POST['email'])) && isset(($_POST['password']))) {
    $kullanici_adi = $_POST['email'];
    $sifre = $_POST['password'];

    // Basit doğrulama (gerçek uygulamalarda veritabanı kullanın)
    if ($kullanici_adi === 'admin' && $sifre === 'password') {
        $_SESSION['username'] = "Başar ACAROĞLU";
        $_SESSION['logged_in'] = true;
        header('Location: Sepet.php');
        exit();
    } else {
        $error_message = "Geçersiz kullanıcı adı veya şifre.";
    }
}




?>


<!doctype html>
<html lang="tr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
 <form id="login" class="mt-5" action="#" method="post">
            <h1 class="h3 mb-3 fw-normal">Giriş Yap</h1>

            <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInput" placeholder="kullanici adi" required />
                <label for="floatingInput">Kullanıcı Adı</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Şifre" required />
                <label for="floatingPassword">Şifre</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Giriş Yap</button>
            <?php
            if (isset($error_message)) {
                echo '<div class="alert alert-danger mt-3" role="alert">' . $error_message . '</div>';
            }
            ?>

        </form>
        </div>
    </div>

       
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>