<?php

 namespace  Bookstore\exceptions;

 interface  Payer
 {
     public  function  pay(float  $amount);
     public  function  isExtentOfTaxes();

 }