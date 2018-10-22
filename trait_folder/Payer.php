<?php

 namespace  Bookstore\trait_folder;

 interface  Payer
 {
     public  function  pay(float  $amount);
     public  function  isExtentOfTaxes();

 }