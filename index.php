<?php

class Book {
    private $title;
    private $author;
    private $publicationYear;
    private $price;

    public function __construct($title, $author, $publicationYear, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->price = $price;
    }

    public function displayDetails() {
        echo "Title: $this->title\n";
        echo "Author: $this->author\n";
        echo "Publication Year: $this->publicationYear\n";
        echo "Price: \$$this->price\n";
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($newPrice) {
        $this->price = $newPrice;
    }

    public function isClassic() {
        return $this->publicationYear < 1950;
    }
}

// Create instances
$book1 = new Book("To Kill a Mockingbird", "Harper Lee", 1960, 15.99);
$book2 = new Book("1984", "George Orwell", 1949, 12.99);
$book3 = new Book("Pride and Prejudice", "Jane Austen", 1813, 9.99);

// Interact with instances
echo "Book 1 Details:\n";
$book1->displayDetails();
echo "Is Classic? ". ($book1->isClassic() ? "Yes" : "No"). "\n";
echo "Original Price: $". $book1->getPrice(). "\n";
$book1->setPrice(18.99);
echo "New Price: $". $book1->getPrice(). "\n\n";

echo "Book 2 Details:\n";
$book2->displayDetails();
echo "Is Classic? ". ($book2->isClassic() ? "Yes" : "No"). "\n\n";

echo "Book 3 Details:\n";
$book3->displayDetails();
echo "Is Classic? ". ($book3->isClassic() ? "Yes" : "No"). "\n";

?>