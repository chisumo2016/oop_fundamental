<?php

  namespace  Bookstore\exceptions\Customer;

  use Bookstore\exceptions\Customer;
  use Bookstore\exceptions\Person;

  class  Basic extends Person  implements  Customer
  {
      //lets add more methods

      public function  getMothlyFee()
      {
          return 5.0;
      }

      public  function  getAmountToBorrow()
      {
          return 3;
      }

      public  function  getType()
      {
          return 'Basic';
      }

      public function  pay(float $amount)
      {
          return "Paying $amount";
      }

      public  function  isExtentOfTaxes()
      {
          return 'You gonna pay tax mate';
      }
  }