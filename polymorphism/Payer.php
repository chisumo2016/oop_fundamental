<?php

 namespace  Bookstore\polymorphism;

 interface  Payer
 {
     public  function  pay(float  $amount);
     public  function  isExtentOfTaxes();

 }