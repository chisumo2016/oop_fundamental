<?php

//Let require classes

require_once  __DIR__ . '../../magic_method/Book.php';
require_once  __DIR__ . '/Customer.php';
//Instantiate (use it)
//$harry_potter = new Book(88888888888888, "Book of Time", "Bernard" );
//$harry_potter = new Book(88888888888888, "Book of Time", "Bernard",10 );


$first_customer = new Customer(1, "Berna", "Guuu", "bc@gmail.com");
$second_customer = new Customer(null, "Juma", "Magufuli", "juma@gmail.com");
$third_customer = new Customer(1, "ZEB", "Magufuli", "juma@gmail.com");


//var_dump($harry_potter->author);
//var_dump($first_customer->getFirstName());
/*var_dump($first_customer->getFullName());
var_dump($first_customer->getEmail());
var_dump($first_customer->setEmail("ray@gmail.com"));
var_dump($first_customer->getEmail());


var_dump($second_customer);


//Access static

var_dump($first_customer::getLastId());*/


// reference it using existing instance
echo $first_customer::getLastId();

//reference it using class name itself

echo Customer::getLastId();

?>