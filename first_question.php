<? 
    class Book{
        protected $title;
        protected $yearPublished;
        protected $author;

        //constructor with default values
        public function __construct($title='Ananse In the Land of Idiots', $yearPublished='1948', $author='Asare')
        {
            $this -> title = $title;
            $this->yearPublished = $yearPublished;
            $this-> author = $author;
        }

        //getter for title
        protected function getTitle(){
            return $this -> title;
        }
        //getter for yearOfPublish
        protected function getYearPublished() {
            return $this-> yearPublished;
        }

        //getter for author
        protected function getAuthor()
        {
            return $this -> author;
        }

        protected function setAuthor($author)
        {
            $this->author = $author;
        }

        protected function setYearPublished($yearPublished){
            $this -> yearPublished = $yearPublished; 
        }

        protected function setTitle($title){
            $this ->title = $title;
        }

        public function summary(){
            echo "The title of the book is " . $this->getTitle() . PHP_EOL; 
            echo "The year " . $this->getTitle() . "was published is " . $this->getYearPublished()  .PHP_EOL;
            echo "The author of the book is " . $this->getAuthor() .PHP_EOL;
        }
    }
    //this first object illustrates a book with respect to the constructor with default values
    $book1 = new Book();

    //providing specific values
    $book2 = new Book("Programming 1", 2023, "Paul Nii Armah");

    echo $book1->summary();
    echo $book2 -> summary();

?>