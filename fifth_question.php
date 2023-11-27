<?php

class MyCalculator {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add() {
        return $this->num1 + $this->num2;
    }

    public function subtract() {
        return $this->num1 - $this->num2;
    }

    public function multiply() {
        return $this->num1 * $this->num2;
    }

    public function divide() {
        
        if ($this->num2 == 0) {
            return "Cannot divide by zero!";
        }
        return $this->num1 / $this->num2;
    }
}


$mycalc = new MyCalculator(12, 6);

echo "Addition: " . $mycalc->add() . PHP_EOL;         
echo "Subtraction: " . $mycalc->subtract() . PHP_EOL;  
echo "Multiplication: " . $mycalc->multiply() . PHP_EOL;
echo "Division: " . $mycalc->divide() . PHP_EOL;     
?>
