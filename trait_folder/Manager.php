<?php
 namespace  Bookstore\trait_folder;
//insteadof - as
 //use trait
 use  Bookstore\Utils\Contract;

 //Another trait
 use  Bookstore\Utils\Communicator;


 class Manager{
     use Contract, Communicator{
         Contract::sign insteadof Communicator;
         Communicator::sign as makeSign;

     }

     //it will take the presidenc
     public  function  sign()
     {
         echo 'It is from the class itsels';
     }
     // use Communicator , ;
 }