<?php

// static function halo() {
// 		return"Halo " . self::$angka++ . "kali.";
// 	}class Contoh static {
// 	public static $angka = 1;

// 	public 
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh {
	public $angka = 1;

	public function halo() {
		return "Halo " . $this->angka++ . " kali. <br>";
	}
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
