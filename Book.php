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

    // Methods are function
}

//Instantiate (use it)
$harry_potter = new Book();

//Assign the value
$harry_potter->isbn = 88888888888888;
$harry_potter->title = "Book of Time";
$harry_potter->author ="Bernard";
$harry_potter->available= 10;

var_dump($harry_potter);