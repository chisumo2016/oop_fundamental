<?php

  namespace  Bookstore\interfac_tutorial\Customer;

  use Bookstore\interfac_tutorial\Customer;
  use Bookstore\interfac_tutorial\Person;

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