<?php

  namespace  Bookstore\abstract_class\Customer;

  use Bookstore\abstract_class\Customer;

  class  Basic extends  Customer
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
  }