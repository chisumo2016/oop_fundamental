<?php

//Let require classes

require_once  __DIR__ . '../../magic_method/Book.php';
require_once  __DIR__ . '/Customer.php';
//Instantiate (use it)
$harry_potter = new Book(88888888888888, "Book of Time", "Bernard" );
//$harry_potter = new Book(88888888888888, "Book of Time", "Bernard",10 );


$first_customer = new Customer(1, "Berna", "Guuu", "bc@gmail.com");


//var_dump($harry_potter->author);
var_dump($first_customer);



?>