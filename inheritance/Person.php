<?php
/**
 * Created by PhpStorm.
 * User: bundalla
 * Date: 10/22/2018
 * Time: 11:50 AM
 */

namespace Bookstore\namespaces;


class Person
{
    protected  $first_name;
    protected  $surname;
    //protected  $email;


    public  function  __construct($first_name, $surname)
    {
        $this->first_name = $first_name;
        $this->surname = $surname;
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
}