<?php

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
class Customer
{


   private  $id;
   private  $first_name;
   private  $surname;
   private  $email;

   //Constructor

    public function  __construct($id,$first_name, $surname,$email)
    {
        $this->id           = $id;

        $this->first_name   = $first_name;
        $this->surname      =$surname;
        $this->email        =$email;
    }


    // Encapsulation Maintain Internal structure
    public function  getFirstName()
    {
        return $this->first_name;
    }

    public  function  getSurname()
    {
        return $this->surname;
    }

    public  function  getFullName()
    {
        return strtoupper($this->first_name .  ' ' . $this->surname);
    }

    //Getters
    public  function  getEmail()
    {
        return $this->email;
    }

    //setters  or mutators
    public  function  setEmail(string  $email)
    {
        $this->email = $email;
    }



}