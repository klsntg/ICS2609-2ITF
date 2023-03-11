<?php

class book{

    private $favBook;
    private $page;

    public function setFavBook($favBook) {
        
        $this-> favBook = $favBook;
    }

    public function getFavBook() {

        return $this->favBook;
    }

    public function setPage($page) {

        $this-> page = $page;
    }

    public function getPage() {

        return $this->page;
    }

    public function displayInfo() {

        echo $this->getFavBook() . " has " . $this->getPage() . " pages. <br>";
    }
}


class publisher extends book {
  
    private $publisher;

    public function __construct($publisher) {

    }

    public function setPublisher($publisher) {
        
        $this-> publisher = $publisher;
    }

    public function getPublisher() {

        return $this->publisher;
    }

    public function displayInfo() {

        echo $this->getFavBook() . " is a great book.<br>";
    }

    public function printInfo() {

        echo $this->getFavBook() . " was published by " . $this->getPublisher() . ". <br>";
    }

    public function printInfo2($author) {

        echo $this->getFavBook() . " is written by " . $author . ". <br><br>";

    }
}


class  reader extends book {

    private $reader;

    public function setReader($reader) {

        $this->reader = $reader;
    }

    public function getReader() {

        return $this->reader;
    }
}


class degree extends publisher {

    private $degree;

    public function setDegree($degree) {

        $this->degree = $degree;
    }

    public function getDegree() {

        return $this->degree;
    }
}


$parent = new book();
$parent->setFavBook("Song of Achilles");
$parent->setPage(416);
$parent->displayInfo();

$child = new publisher("SOA");
$child->setFavBook("Song of Achilles");
$child ->setPublisher("Harper Collin");
$child ->printInfo();
$child ->displayInfo();
$child ->printInfo2("Madeline Miller");

$o1 = new book();
$o1->setFavBook("The Seven Husbands of Evelyn Hugo");
$o1->setPage(400);
$o1->displayInfo();

$o2 = new publisher("TSHOEH");
$o2->setFavBook("The Seven Husbands of Evelyn Hugo");
$o2 ->setPublisher("Simon & Schuster");
$o2 ->printInfo();
$o2 ->displayInfo();
$o2 ->printInfo2("Taylor Jenkins Reid");

$o3 = new book();
$o3->setFavBook("We Were Liars");
$o3->setPage(256);
$o3->displayInfo();


?>