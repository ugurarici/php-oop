<meta charset="UTF-8">
<?php
// php'nin çağırılan sınıfı bulamadığında çalıştırdığı __autoload methodunu tanımlıyoruz
function __autoload($className){
    echo $className . " sınıfını bulamadı ve __autoload çalıştı<br>";
    require_once "classes/" . $className . ".php";
}

// instance oluşturuyoruz
$kuruTemizlemeci = new EveKuruTemizleme();

// camasir için veri gönderiyoruz
$kuruTemizlemeci->setCamasir("Pantul");

// camasir yıkama işlemlerini çalıştırıyoruz
$kuruTemizlemeci->yika();