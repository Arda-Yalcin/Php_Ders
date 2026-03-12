<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Dosya yükleme formu -->
    <!-- enctype="multipart/form-data" dosya göndermek için gerekli özel ayar -->
    <form action="yukle.php" method="post" enctype="multipart/form-data">
        <!-- Dosya seçme etiketi -->
        <label for="File">Dosya Yükle</label>
        <!-- Dosya seçme input alanı. name="dosya" ile PHP'de $_FILES["dosya"] ile erişilir -->
        <input type="file" name="dosya" id="dosya">
        <br>
        <!-- Formu göndermek için gönder butonu -->
        <input type="submit" value="Gönder">
    </form>
</body>
</html>