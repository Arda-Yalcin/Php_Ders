<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Form alanı: Profesör fotoğrafı ve ad soyad girmek için -->
    <div class="container">
        <div class="row">
            <!-- Dosya yükleme formu. enctype="multipart/form-data" dosya göndermek için gerekli -->
            <form action="yukle.php" method="post" enctype="multipart/form-data">

            <!-- Dosya seçme etiketi ve input alanı -->
            <label for="File">Prof Fotoğrafı Yükle</label>
            <input type="file" name="dosya" id="dosya">
            
            <br>
            <!-- Kullanıcının adı soyadını girdiği metin alanı -->
            <input type="text" name="ad" id="ad" placeholder="Adınızı Soyadınızı Girin">
            <br>
            <!-- Formu göndermek için gönder butonu -->
            <input type="submit" value="Gönder">

            </form>

        </div>

    </div>
        
   




</body>
</html>