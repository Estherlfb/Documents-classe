<?php

namespace BookStore;

use bookStore\BookStore;

class Book
{
    private $title;
    private $writer;
    private $isbn;

    public function __construct(string $title, string $writer, int $isbn)
    {
        $this->title = $title;
        $this->writer = $writer;
        $this->isbn = $isbn;
    }
}
