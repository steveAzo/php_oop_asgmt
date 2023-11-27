<?

    class Rectangle{
        public $length;
        public $width;

        public function __construct($length, $width)
        {
            $this->length = $length;
            $this->width = $width;
        }

        //getter for length
        public function getLenth(){
            return $this->length;
        }
        //getter for width
        public function getWidth(){
            return $this->width;
        }

        public function area(){
            return $this->length * $this->width;
        }

        //method for calculating the perimeter of a rectangle
        public function perimeter(){
            return (2*$this->length + 2*$this->width);
        }


    }


    //the function below echoes the area and perimeter of a rectangle
function printInfo(Rectangle $rectangle){
    echo "The area of the rectangle is " . $rectangle->area() . PHP_EOL;
    echo "The perimeter of the rectangle is " . $rectangle->perimeter();
}

$rec1 = new Rectangle(3, 9);

printInfo($rec1);


?>