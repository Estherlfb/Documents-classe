<?php

namespace BookStore;

class BookStore
{

    private $library = [];
    private $book;
    private $isbn;

    public function addBook($book)
    {
        // array_push($this->library, $this->library[] = $book);
        // return $this;

        $this->libraby[] = $book;
    }

    public function getIsnb($isbn): BookStoreInterface
    {
        return $this->isbn;
    }

    public function removeBookIsAvailable($book)
    {
        if (in_array($book, $this->library)) {
            $key = array_search($book, $this->library);
            unset($this->library[$key]);
            return $this;
        } else {
            throw new BookNotAvailableException("Désolé, le livre n'est pas disponible");
        }

    }

    public function returnBook($book)
    {
        array_push($this->library, $this->library[] = $book);

        return $this;
    }
}
