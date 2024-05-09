<?php  

const host="localhost";
const username="root";
const password="";
const database="kurs";

$baglanti=mysqli_connect(host,username,password,database);

if(mysqli_connect_errno()>0){
    die("hata".mysqli_connect_errno());
}
 echo "mysql bağlantınız oluşturuldu<br>";

 mysqli_close($baglanti);

 echo "mysql bağlantınız kapatıldı";




?>