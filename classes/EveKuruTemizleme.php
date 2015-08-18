<?php

// KuruTemizleme işlemini evlere servis şeklinde genişletmek için yeni bir sınıf açıyoruz, öncekinden miras alıyoruz
class EveKuruTemizleme extends KuruTemizleme{

	// aynı methodla çağırmak için üstüne yazıyoruz (aynı isimle tekrar tanımlıyoruz)
	public function yika($gelenCamasir = null, $teslimAlinacakMi = true, $teslimEdilecekMi = true){

		// çamaşırın üstüne yazma kısımları tekrar yazılıyor (dışarıya alınabilir mi? düşünelim)
		if(!is_null($gelenCamasir))
			$this->setCamasir($gelenCamasir);

		// bu sınıfta eklediğimiz özellikleri kontrol edip çağırıyoruz
		if($teslimAlinacakMi) $this->teslimAl();

		// yıkama işlemimiz miras alınan sınıftan farklı olmadığı için geliştirdiğimiz method içinde miras sınıftaki methodu çağırıyoruz
		parent::yika();

		// bu sınıfta eklediğimiz özellikleri kontrol edip çağırıyoruz
		if($teslimEdilecekMi) $this->teslimEt();
	}

	// geliştirdiğimiz sınıfta tanımladığımız methodlar
	private function teslimAl(){
		echo $this->camasir." teslim alındı<br>";
	}

	private function teslimEt(){
		echo $this->camasir." teslim edildi<br>";
	}
}