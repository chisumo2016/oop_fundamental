<?php

namespace  Bookstore\polymorphism\Customer;

use Bookstore\polymorphism\Customer;
use Bookstore\polymorphism\Person;

class  Premium  extends Person implements  Customer
{
    //lets add more methods

    public function  getMothlyFee()
    {
        return 10.0;
    }

    public  function  getAmountToBorrow()
    {
        return 10;
    }

    public  function  getType()
    {
        return 'Premium';
    }

    public function  pay(float $amount)
    {
        return "Paying $amount";
    }

    public  function  isExtentOfTaxes()
    {
        return 'Dont worry about paying tax';
    }
}