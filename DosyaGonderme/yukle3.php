<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Dosya gönderilip gönderilmediğini kontrol ediyoruz
        if(isset($_FILES["dosya"])){
            // Dosyanın kaydedileceği klasörü tanımlıyoruz
            $hedef="odevler/";
            
            // Dosyanın uzantısını alıyoruz (örn: pdf, txt, jpg vs)
            // strtolower() küçük harfe çeviriyor
            $dosyaUzantisi=strtolower(pathinfo(basename($_FILES["dosya"]["name"]),PATHINFO_EXTENSION));
            
            // Dosya adını md5 hash + zaman damgası kullanarak oluşturuyoruz (benzersiz yapıyor)
            $dosyaAdi=md5(time());
            
            // Yeni dosya yolunu oluşturuyoruz (klasör + hash + uzantı)
            $hedefDosya=$hedef.$dosyaAdi.".".$dosyaUzantisi;
            
            // Başlangıçta yükleme izni veriyoruz
            $yukle=true;

            // Eğer aynı isimli dosya zaten varsa uyarı veriyoruz
            if(file_exists($hedefDosya)){
                echo "bu isimli dosya zaten var";
                // Yüklemeyi engellemek için false yapıyoruz
                $yukle=false;
                
            }
            // Eğer dosya PDF değilse uyarı veriyoruz
            if($dosyaUzantisi!="pdf"){
                echo "sadece pdf dosya yükle";
                // Yüklemeyi engellemek için false yapıyoruz
                $yukle=false;
            }
            // Tüm kontroller geçtiyse dosyayı yüklüyoruz
            if($yukle){
                if(move_uploaded_file($_FILES["dosya"]["tmp_name"],$hedefDosya)){
                    echo "kayıt başarılı";
                }  
                else{
                    echo "kayıt Başarısız";
                }
            }

        }
        
    ?>
</body>
</html>