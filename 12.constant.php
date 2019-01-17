<?php

// define( 'NAMA', 'Cahyani');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;


// const NAMA = 'Cahyani';
// class coba{
// }

// echo coba::NAMA;


// echo __FILE__;

// function coba(){
// return __FUNCTION__;
// }

// echo coba(){
// return __FUNCTION__;
// }

// echo coba();

class coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;



?>


