<?php

// Simple example of class and object
    class SimpleClass{


        public $number1;
        public $number2;

        /*public function __construct($num1,$num2){
            $this->number1=$num1;
            $this->number2=$num2;
        }*/

        public function the_sum(){
            $total = $this->number1+$this->number2;
            echo $total;
        }

        public function output_the_sum($num1,$num2){
            echo $total=$num1+$num2;
        }
  }

        $numbers = new SimpleClass();
        //$numbers->input_two_no(10,20);
        //$numbers->the_sum();
        //$numbers->output_the_sum(10,20);

 



//Public, Private, Protected.


//Base Class in Public
class Base{
 	public $tagline = "Milan is a good boy!";
 	public function show(){
 		echo $this->tagline."<br>";
 	}
 }
 //Child Class
 class Chiled extends Base{
 		public function dispaly(){
 		echo $this->show();
 		}
 	}
 $obj= new Chiled();
 //$obj->dispaly();
 
//Base Class in Protected 
Class Pro{
	protected $x=500;
	protected $y=400;
	function sub(){
		echo "The Substraction Is :".$sum = $this->x-$this->y."</br>";
	}
}
class Child extends Pro{
	function mul(){
		echo "The Multiple is : ".$sub= $this->x*$this->y."</br>";
	}
}

$objCal= new Child();
//$objCal->sub();
//$objCal->mul();




//Private


// Base Class
class demo {
    const name1="A Computer Science Portal for Geeks!";
      
    private function shows()
    {
    	echo self::name1;
        //echo $this->name1;
    }
} 
  
// Sub Class
class child23  {
	private $name="This is anther class of privat";
    function displays()
    {
        echo $this->name;
    }
} 
  
// Object Declaration
$obj23= new demo();

$obj23->shows();
  
// Uncaught Error: Call to private method demo::show()
//$obj23->shows(); 
  
//Undefined property: child::$name
//$obj23->displays(); 



//Constructor

/*class Cals {
  public $n1;
  public $n2;

  function __construct($n1, $n2) {
    $res= $this->n1 + $this->n2;
   	echo  "The addition value is: ".$res;
  }
  
}

$objCal = new Cals(10,30);*/



?>