<?php

// class declearation in dynamic
class a{
	private $a;
	protected $b;

	public function show($a,$b){
		//return $res;

		$res = $this->a+$this->b;
	}
}

$obj = new a();
echo $obj->show(10,20);




?>