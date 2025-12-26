<?php
session_start();
if (!isset($_SESSION['logged_in']) ) {
    header('Location: index.php');
    exit();
}
$urunler = [
  "Domates" => "Sırık domates çok güzel",
  "Patates" => "Ödemiş patates",
  "Biber" => "Sivri biber çok acı",
  "Salatalık" => "Yayla salatalık",
  "Soğan" => "Tarla soğan",
  "Kereviz" => "Tam mevsimi"
];
if (!isset($_COOKIE["sepet"])) {
  setcookie("sepet", "", time() + 60 * 60 * 24);
}
if (isset($_POST["urun"])) {
  $sepet = $_COOKIE["sepet"];
  $sepet = $sepet . $_POST["urun"] . ",";
  setcookie("sepet", $sepet, time() + 60 * 60 * 24);
}

$adet=explode(",",$_COOKIE["sepet"]);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"><?= $_SESSION['username'] ?></a>
      <div class="nav justify-content-end  ">
        <a class="position-relative">
         <i class="fa-solid fa-basket-shopping"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <?= count($adet) - 1 ?>
            <span class="visually-hidden">unread messages</span>
          </span>
        </a>

      
      </div>

    </div>
  </nav>


  <div class="container">
    <div class="row mt-5">
      <?php
      foreach ($urunler as $key => $value) { ?>
        <div class="col-md-4">
          <div class="card mb-3">

            <div class="card-body">
              <h4 class="card-title"><?= $key ?></h4>
              <p class="card-text"><?= $value ?></p>
              <form action="Sepet.php" method="post">
                <input type="hidden" name="urun" value="<?= $key ?>">
                <button type="submit" class="btn btn-primary">
                  Sepete Ekle
                </button>


              </form>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
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