<?php

class produk {
	public $judul,
		   $penulis,
		   $penerbit;

public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {

	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
 }

public function getharga() {
	return $this->harga;
}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
		
	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";	

		return $str;
	}
}

class komik extends produk{
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->jmlHalaman - $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
		return $str;
	}
}


class Game extends produk{
	public $waktuMain;

public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
parent::__construct( $judul, $penulis, $penerbit, $harga );

	$this->waktuMain = $waktuMain;
}

	public function setdiskon( $diskon ) {
		return $this->diskon = $diskon;
}
	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
		return $str;

}
}

class CetakInfoProduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new komik("Naruto", "Masasht Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony computer", 25000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setdiskon(50);
echo $produk2->getharga();