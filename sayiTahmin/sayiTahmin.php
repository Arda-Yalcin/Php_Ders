<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Sayı</title>
</head>
<body>

    <form action="sayiTahmin.php" method="get">
        <input type="text" name="Tahmin" id="Tahmin"> <br>
        <input type="submit" value="Tahmin Et"><br>
    </form>

    <?php
    session_start(); 

    // rastgele sayı oluştur
        if (!isset($_SESSION["random"])) {
            $_SESSION["random"] = rand(1, 50);
        }

        // Form gönderilmiş mi kontrol et
        if (isset($_GET["Tahmin"])) {
            $tahmin = $_GET["Tahmin"];
            $random = $_SESSION["random"];

            if ($tahmin == $random) {
                echo "Doğru tahmin!";

                // Yeni oyun başlatmak için yeni sayı üretir
                $_SESSION["random"] = rand(1, 50);
            } elseif ($tahmin < $random) {
                echo "Daha büyük bir sayı girin.";
            } else {
                echo "Daha küçük bir sayı girin.";
            }
        } else {
            echo "Lütfen bir tahmin giriniz.";
        }
    ?>
</body>
</html>