<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_FILES["dosya"])){
            $hedef="odevler/";
            //$hedefDosya=$hedef.basename($_FILES["dosya"]["name"]);
            $dosyaUzantisi=strtolower(pathinfo(basename($_FILES["dosya"]["name"]),PATHINFO_EXTENSION));
            $dosyaAdi=md5(time());
            $hedefDosya=$hedef.$dosyaAdi.".".$dosyaUzantisi;
            $yukle=true;

            if(file_exists($hedefDosya)){
                echo "bu isimli dosya zaten var";
                $yukle=false;
                
            }
            if($dosyaUzantisi!="pdf"){
                echo "sadece pdf dosya yükle";
                $yukle=false;
            }
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