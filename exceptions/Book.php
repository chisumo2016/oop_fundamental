<?php

//Namespace

namespace  Bookstore\exceptions;



//default argument  $available = 0

//Type Hint  int $isbn, string PHP 7
class Book
{
     // Properties like variable

    public $isbn;
    public $title ;
    public $author;
    public $available;

    //Constructor

    public  function  __construct(int $isbn, string $title, string $author, int $available = 0)
    {
         $this->isbn = $isbn;
         $this->title = $title;
         $this->author = $author;
         $this->available = $available;
    }


    //Magic Method toString

    public function  __toString()
    {
        $result = $this->title . ' by ' . $this->author;

        if($this->available){
            $result .= "Not Available";
        }

        return $result;
    }

    // Methods are function, $this  mean all class

    public function  getPrintableTitle()
    {
        $result = $this->title . ' by ' . $this->author;

        if($this->available){
            $result .= "Not Available";
        }

        return $result;
    }

    public  function  getCopy()
    {
        if($this->available < 1){
            return false;
        }else{
            $this->available--;
            return true;
        }
    }
}

//Instantiate (use it)
$harry_potter = new Book(88888888888888, "Book of Time", "Bernard" );
//$harry_potter = new Book(88888888888888, "Book of Time", "Bernard",10 );

echo  $harry_potter;

