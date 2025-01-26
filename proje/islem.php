<?php 

$sehir_id=$_POST["sehir_id"];
$sube_ad=$_POST["sube_ad"];
$sube_tel=$_POST["sube_tel"];
$sube_adres=$_POST["sube_adres"];


$vt_sunucu= "localhost";
$vt_kullanici= "root";
$vt_sifre= "";
$vt_adi= "puma_giyim";


$baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);


if (!$baglan) {
  die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
}

$ekle= "INSERT INTO subeler (sehir_id, sube_ad,sube_tel,sube_adres)  VALUES ('".$sehir_id."','".$sube_ad."','".$sube_tel."','".$sube_adres."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Veritabanına veri eklendi";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}


?>