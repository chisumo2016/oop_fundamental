<?php

 namespace  Bookstore\interfac_tutorial;

 interface  Payer
 {
     public  function  pay(float  $amount);
     public  function  isExtentOfTaxes();

 }