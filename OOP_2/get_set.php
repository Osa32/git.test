<?php
	class A{
		public $user;

		function __set($n, $v){
			$this->user[$n]=$v;
		}

		function __get($n){
			return $this->user[$n];
		}
	}

	$o = new A();
	$o->name = "John";
	//умовно, якщо в нас в класі, ще не було описано влаcтивості name
	//і перед тим, як її створити, пхп звертається до магічного
	//методу __set, куди передається імя і значення властивості
	//якщо цей метод буде описаний, тоді пхп буде звертатись до нього
	
	echo $o->name;
	//тут є echo, тому - це означає, що ми викликаємо властивість
	//схожа ситуація із магічним методом __get, до якого звертається пхп,
	//коли ми хочемо взяти значення якоїсь властивості. Тобто пхп
	//тупо викликає ПРИ ПРИСВОЮВАННІ метод __set, а ПРИ ВИКЛИКУ властивості - 
	//метод __get.
?>