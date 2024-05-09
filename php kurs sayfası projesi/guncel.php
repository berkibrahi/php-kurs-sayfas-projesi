<?php
 include "ayar.php";
 $query="UPDATE kategoritablo SET kategori_adi='ibrahim' WHERE id=1 ";
 
 $sonuc=mysqli_query($baglanti,$query);
 if($sonuc){
    echo "tablo güncellendi";
 }

mysqli_close($baglanti)

?>