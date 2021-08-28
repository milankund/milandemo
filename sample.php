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

        $numbers = new SimpleClass();
        $numbers->input_two_no(10,20);
        $numbers->the_sum();
        $numbers->output_the_sum();

    }

?>