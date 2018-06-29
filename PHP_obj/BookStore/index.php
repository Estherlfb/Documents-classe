<?php

include "vendor/autoload.php";

use bookStore\Book;
use bookStore\BookStore;

$bookstore = new BookStore();
$book = new Book("michel au bureau", "pj", 25);
$bookstore->addBook($book);
$book = new Book("test 2", "ABC", 30);
$bookstore->addBook($book);
$book = new Book("test 3", "DEF", 0);
$bookstore->addBook($book);
var_dump($bookstore);

$bookstore->getIsnb();
$bookstore->returnBook($book);
$bookstore->removeBookIsAvailable($book);
var_dump($bookstore);
