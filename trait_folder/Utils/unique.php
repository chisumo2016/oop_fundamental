<?php

namespace  Bookstore\Utils;

trait  Unique {

    private  static $lastId = 0;
    private  $id;


    public function setId($id)
    {
        if ($id == null)
        {
            $this->id = ++self::$lastId;
        }else{

            $this->id  = $id;

            if($id > self::$lastId){

                self::$lastId = $id;
            }
        }
    }

    //Accessor

    public  static  function getLastId()
    {
        return self::$lastId;
    }

    public function getId()
    {
        return $this->id;
    }

}