<?php

// Simple example of class and object
    class SimpleClass{


        var $number1;
        var $number2;

        public function input_two_no($num1,$num2){
            $this->number1=$num1;
            $this->number2=$num2;
        }

        public function the_sum(){
            $total = $number1+$number2;
            return $total;
        }

        public function output_the_sum(){
            echo $total;
        }
  }

        $numbers = new SimpleClass();
        $numbers->input_two_no(10,20);
        $numbers->the_sum();
        $numbers->output_the_sum();

 



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
 		echo $this->tagline;
 		}
 	}
 $obj= new Chiled();
 echo $obj->show();
 
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
$objCal->sub();
$objCal->mul();




// Base Class
class demo {
    private $name1="A Computer Science Portal for Geeks!";
      
    private function shows()
    {
        echo "This is a fast class of private";
    }
} 
  
// Sub Class
class child23 {
	private $name="This is anther class of privat";
    function displays()
    {
        echo $this->name;
    }
} 
  
// Object Declaration
$obj23= new child23;
  
// Uncaught Error: Call to private method demo::show()
$obj23->shows(); 
  
//Undefined property: child::$name
$obj23->displays(); 



?>