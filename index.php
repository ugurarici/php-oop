<meta charset="UTF-8">
<?php
// sınıfları /classes klasörüne aldığımız için ihtiyacımız olan sırayla çağırıyoruz
require_once "classes/KuruTemizleme.php";
require_once "classes/EveKuruTemizleme.php";

// instance oluşturuyoruz
$kuruTemizlemeci = new EveKuruTemizleme();

// camasir için veri gönderiyoruz
$kuruTemizlemeci->setCamasir("Pantul");

// camasir yıkama işlemlerini çalıştırıyoruz
$kuruTemizlemeci->yika();