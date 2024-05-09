<?php 
include "ayar.php";
$query = "INSERT INTO kurstablo (baslik, altbaslik, resim, yayinTarihi, yorumSayisi, begeniSayisi, onay) VALUES 
('angular kursu', 'ileri seviye angular kursu', '1.jpg', '2023-10-10', 6, 6, 1)";


$sonuc=mysqli_query($baglanti,$query);
if($sonuc){
    echo "kayit eklendi";
}else{
    echo "kayıt eklenmedi";
}

mysqli_close($baglanti);


echo "mysql bağlantınız kapatıldı";


?>