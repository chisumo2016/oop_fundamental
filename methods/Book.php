<?php

/**
 * Created by PhpStorm.
 * User: bundalla
 * Date: 10/19/2018
 * Time: 12:54 PM
 */
class Book
{
     // Properties like variable

    public $isbn;
    public $title ;
    public $author;
    public $available;

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
$harry_potter = new Book();

//Assign the value
$harry_potter->isbn = 88888888888888;
$harry_potter->title = "Book of Time";
$harry_potter->author ="Bernard";
$harry_potter->available= 10;

if ($harry_potter->getCopy()){

    echo 'Here is your copy of ' . $harry_potter->title. '<br>';
}else{
    echo 'Sorry its gone';
}

var_dump($harry_potter);