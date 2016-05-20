<?php

class Input
{
    /**
     * Check if a given value was passed in the request**/

    /**
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        if (isset($_REQUEST[$key])){
            return true;
        } else {
            return false;
        }
        // I could have just done: {return isset::($REQUEST($key));}
    }

    /**

     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key)){
            return $_REQUEST[$key];
        } else {
            return NULL;
        }
    }

    public static function getString($key)
    {
        $value=self::get($key);
        if (!is_string($key)){
            throw new Exception( '$value must be a string');
        }
        return $value;
    }

    public static function getNumber($key)
    {
        $value=self::get($key);
        if (!is_numeric($value)){
            throw new Exception('$value must be a number');
        }
        return $value;
    }

    public static function getDate($key)
    {
        $value=self::get($key);
        if (!is_int($key)){
            echo date('l, F jS Y @ h:i:s A');
        }
    }
    // I could have just done: {return self::has($key);}

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
