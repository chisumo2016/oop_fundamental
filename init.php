<?php
//use the namespace by keyword use7

use Bookstore\polymorphism\Book;
use Bookstore\polymorphism\Customer;

use Bookstore\polymorphism\Customer\Basic;
use Bookstore\polymorphism\Customer\Premium;
use Bookstore\polymorphism\Payer;

//autoloader function to autoload classes (bigger project \ but we need to escape backslash \\  Modern we use PSR 4 autoloading

function autoloader($classname){
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);

    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' .$directory . '.php';

    require_once  $filename;
}

spl_autoload_register('autoloader');

//check if valid to borrow the book

function checkIfValid(Customer $customer, $books){
    return $customer->getAmountToBorrow() >= count($books);

}

//process payment

function processPayment(Payer $payer, float $amount)
{
    if($payer->isExtentOfTaxes()){
        return $payer->isExtentOfTaxes();
    }else{
        $amount *= 1.20;
    }

    $payer->pay($amount);
}

//Let require classes

//require_once  __DIR__ . '/namespaces/Book.php';
//require_once  __DIR__ . '/namespaces/Customer.php';


//Instantiate (use it)
//$harry_potter = new Book(88888888888888, "Book of Time", "Bernard" );
/*$harry_potter = new Book(88888888888888, "Book of Time", "Bernard",10 );
$harry_potter1 = new Book(88888888888888, "Book of Time", "Bernard",10 );
$harry_potter2 = new Book(88888888888888, "Book of Time", "Bernard",10 );
$harry_potter3 = new Book(88888888888888, "Book of Time", "Bernard",10 );*/

$harry_potter = new Book(88888888888888, "Book of Time", "Bernard",10 );
$first_customer = new Book(88888888888888, "Book of Time", "Bernard",10 );
$premiun_customer = new Book(88888888888888, "Book of Time", "Bernard",10 );


$processPayment = new Basic(1, "Berna", "Guuu", "bc@gmail.com");
$premiun_customer = new Premium(1, "Bernarr", "Guuu", "bc1@gmail.com");


//$first_customer = new Customer(1, "Berna", "Guuu", "bc@gmail.com");
//$second_customer = new Customer(null, "Juma", "Magufuli", "juma@gmail.com");
//$third_customer = new Customer(1, "ZEB", "Magufuli", "juma@gmail.com");

//var_dump($first_customer->sayHi());

//var_dump(checkIfValid($first_customer, [$harry_potter,$harry_potter1,$harry_potter2,$harry_potter3]));
var_dump(checkIfValid($first_customer, $harry_potter));
var_dump($first_customer->getType());
var_dump($first_customer->getFullName());


//var_dump($first_customer->pay(1000.00));
//var_dump($first_customer->isExtentOfTaxes());


//var_dump($premiun_customer->isExtendOfTaxes());



var_dump(processPayment($first_customer, 100.00));
var_dump(processPayment($premiun_customer, 100.00));

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
//echo $first_customer::getLastId();
//
////reference it using class name itself
//
//echo Customer::getLastId();

?>