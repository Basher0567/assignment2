<?php
class Book{
    private $title;
    private $availableCopies;
    public function __construct($title,$availableCopies){
        $this->title=$title;
        $this->availableCopies=$availableCopies;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getAvailableCopies(){
        return $this->availableCopies;
    }
    public function borrowBook($borrowBooks){
        if($this->availableCopies>=$borrowBooks){
            $this->availableCopies-=$borrowBooks;
        }
        return $this->availableCopies;

    }
    public function returnBook($returnBooks){
        $this->availableCopies+=$returnBooks;
        return $this->availableCopies;

    }
}
class Member {
    private $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public function borrowBook(Book $book){    
        $book->borrowBook(1);           
    }
    public function returnBook(Book $book){
        $book->returnBook(0);

    }

}
$book1= new Book(" The Great Gatsby",5);
$member1=new Member("John Doe");
$member1->borrowBook($book1);
$member1->returnBook($book1);
echo "Available Copies of 'The Great Gatsby': ".$book1->getAvailableCopies();
echo "<br><br>";

$book2= new Book(" To Kill a Mockingbird",3);
$member2=new Member("Jane Smith");
$member2->borrowBook($book2);
$member2->returnBook($book2);
echo "Available Copies of 'To Kill a Mockingbird': ".$book2->getAvailableCopies();
?>