<?php
$host="localhost";
$veritabani_ismi="puma_giyim";
$kullanici_adi="root";
$sifre="";

try {
$db=new PDO("mysql:host=$host;dbname=$veritabani_ismi;charset=utf8",$kullanici_adi,$sifre);


}
catch (pdoexpception $e) {

   
}

?>