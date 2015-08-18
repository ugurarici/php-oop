<?php

// kurutemizleme sınıfı
// kirli çamaşırlar verilip temizlenmiş olarak istenir

// yıkamak, kirli çamaşır, deterjan
// kurulamak, yıkanmış çamaşırlar (ıslak)
// ütülemek, kurumuş çamaşırlar

class KuruTemizleme{
    // sınıf içinde kullanılacak çamaşırı sadece sınıflar içinde kullanılacak şekilde tanımlıyoruz
    protected $camasir;

    // sınıf içinde çağırılacak ama hiçbir zaman değişmeyecek sabiti tanımlıyoruz
    const deterjan = "Ariel";

    // sınıf kurulduğunda, çalıştırılmadan önce çağırılan kısmı yazıyoruz
    function __construct(){
        // sınıf kurulurken çalışan kısım
        echo "Kuru Temizlemeciye Hoş Geldiniz!<br>";
    }

    // sınıfın işi bittiğinde, yıkılırken çağırılacak kısmı yazıyoruz
    function __destruct(){
        // sınıf yıkılırken çalışan kısım
        echo "Güle güle, yine bekleriz :)";
    }

    // sınıf camasir değişkenine muhtaç olduğundan bu değişkene değer atayabilmek için methodumuzu yazıyoruz
    public function setCamasir($gelenCamasir){
        $this->camasir = $gelenCamasir;
    }

    // sınıfa işlem yaptırabilmek için dışarıdan çağırılacak methodu tanımlıyoruz
    public function yika($gelenCamasir = NULL){

        // istersek bu fonksiyon ile çamaşırı üstüne yazabiliyoruz, kullanırken daha düzgün gözükmesi için
        if(!is_null($gelenCamasir))
            $this->setCamasir($gelenCamasir);

        // elimizde camasir yoksa üzüntüden ölüyoruz
        if(!$this->camasir) die("Çamaşır yok :(");

        // elimizde çamaşır olduğuna göre kuru temizleme aşamalarında yapılacak işlemleri çağırıyoruz
        $this->yikamaIslemi();
        $this->kurulamaIslemi();
        $this->utulemeIslemi();
    }

    // çamaşır makinesi işlemleri, deterjan sabit olarak geliyor
    private function yikamaIslemi(){
        echo $this->camasir . ", " . $this::deterjan . " ile yıkandı<br>";
    }

    // kurutma makinesi işlemleri
    private function kurulamaIslemi(){
        echo $this->camasir . " kurulandı<br>";
    }

    // ütü işlemleri
    private function utulemeIslemi(){
        echo $this->camasir . " ütülendi<br>";
    }
}