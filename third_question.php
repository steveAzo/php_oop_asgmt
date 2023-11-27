<?php

abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    public $base;
    public $height;

    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea(){
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($width, $length) {
        $this->width = $width;
        $this->length = $length;
    }

    public function calculateArea(){
        return $this->width * $this->length;
    }
}

$triangle = new Triangle(5, 10);
$rectangle = new Rectangle(4, 8);

echo "Triangle Area: " . $triangle->calculateArea() . PHP_EOL;
echo "Rectangle Area: " . $rectangle->calculateArea() . PHP_EOL;
?>
