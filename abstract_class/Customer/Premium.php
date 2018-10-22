<?php

namespace  Bookstore\abstract_class\Customer;

use Bookstore\abstract_class\Customer;

class  Premium extends  Customer
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
}