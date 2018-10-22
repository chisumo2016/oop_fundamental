<?php

namespace  Bookstore\interfac_tutorial;

/**
 *  PRIVATE
 * The private visibilty means that the properties and methods of the class can not be accessed by outside
 *
 * PROTECTED
 *The protected Visibility means that the properties and methods of the class can be accessed only by its children class
 *
 * PUBLIC
 * Public visibility means that the properties and methods of the class can be accessed by outside
 */
interface Customer extends Payer
{

   //private  $first_name;
   //private  $surname;




    // Defines abstract methods
      public  function  getMothlyFee();
      public  function  getAmountToBorrow();
      public  function  getType();


}