<?php

// class declearation in dynamic
class Calculator{
	public $a;
	public $b;

	public function Sum($a){
		$res = $this->a + $this->b;
		return $res;
	}
}

$obj = new Calculator();
echo $obj->Sum(10,20);




?>