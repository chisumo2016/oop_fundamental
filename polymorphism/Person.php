<?php
/**
 * Created by PhpStorm.
 * User: bundalla
 * Date: 10/22/2018
 * Time: 11:50 AM
 */

namespace Bookstore\polymorphism;


class Person
{
    private  static $lastId = 0;
    private  $id;
    private  $email;

    protected  $first_name;
    protected  $surname;
    //protected  $email;


    //Constructor

    public function  __construct($id,$first_name, $surname, $email)
    {
        //Access the properties of parent
        //parent::__construct($first_name, $surname);



        //$this->id           = $id;
        if ($id == null)
        {
            $this->id = ++self::$lastId;
        }else{

            $this->id  == $id;

            if($id > self::$lastId){

                self::$lastId = $id;
            }
        }

        $this->first_name   = $first_name;
        $this->surname      =$surname;
        $this->email        =$email;
    }

    // methods

    public  function  getFirstName()
    {
        return $this->first_name;
    }

    public function  getSurname()
    {
        return $this->surname;
    }

    //Accessor

    public  static  function getLastId()
    {
        return self::$lastId;
    }


    // Encapsulation Maintain Internal structure
//    public function  getFirstName()
//    {
//        return $this->first_name;
//    }
//
//    public  function  getSurname()
//    {
//        return $this->surname;
//    }

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


    public  function  sayHi()
    {
        return 'Howdy' . $this->first_name . parent::sayHi();
    }


    //method

//    public function  sayHi()
//    {
//        return 'Hi whats up' . $this->first_name;
//    }
}