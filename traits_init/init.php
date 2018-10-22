<?php
//use the namespace by keyword use7

use Bookstore\trait_folder\Book;
use Bookstore\trait_folder\Customer;

use Bookstore\trait_folder\Customer\Basic;
use Bookstore\trait_folder\Customer\Premium;
use Bookstore\trait_folder\Payer;
use Bookstore\trait_folder\Manager;

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


$harry_potter = new Book(88888888888888, "Book of Time", "Bernard",10 );
$first_customer = new Book(10, "Book of Time", "Bernard",10 );
$premiun_customer = new Book(null, "Book of Time", "Bernard",10 );


$processPayment = new Basic(1, "Berna", "Guuu", "bc@gmail.com");
$premiun_customer = new Premium(1, "Bernarr", "Guuu", "bc1@gmail.com");


var_dump(checkIfValid($first_customer, $harry_potter));
//var_dump($first_customer->getType());
var_dump($first_customer->getId());
var_dump($premiun_customer->getId());
//var_dump($first_customer->getFullName());



$manager = new Manager();
echo $manager->sign();
echo $manager->makesSign();


//var_dump(processPayment($first_customer, 100.00));
//var_dump(processPayment($premiun_customer, 100.00));


var_dump($first_customer->getId());

?>