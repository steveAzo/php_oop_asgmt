<?

class Vehicle{
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $year, $model) 
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    //getter for year
    public function getYear()
    {
        return $this->year;
    }

    //getter for model
    public function getModel()
    {
        return $this->model;
    }

    //getter for brand
    public function getBrand(){
        return $this-> brand;
    }

    //setter for brand
    public function setBrand($brand){
        $this->brand = $brand;
    }
    //setter for year
    public function setYear($year){
        $this->year = $year;
    }
    //setter for model
    public function setModel($model){
        $this->model = $model;
    }


    public function details(){
        echo "The car brand is " . $this->getBrand() . PHP_EOL;
        echo "The model of the car is " . $this->getModel() . PHP_EOL;
        echo "The year it was created is " . $this->getYear() . PHP_EOL;
    }


}

$car1 = new Vehicle("Toyota", 2023, "Camry");

echo $car1->details();

 

?>