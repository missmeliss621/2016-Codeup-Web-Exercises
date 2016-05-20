<?php

class Model
{
    // this table is empty because its general. This table is empty b/c its generic. te functions that extend have specifics.
    protected static $table = ' ';
    // Array to store our key/value data
    private $attribute = [];

    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        // this instance of attributes name is the value - i.e. $name='location', $value='San Antonio' -- cheks and compares the two name and value.
        $this->attribute[$name] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        // if $name exists inside attribute then it returns true. $ makes it a variable so it can returns a true or false. If true it does the return.
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }
    public static function getTableName()
    {
        return static::$table;
    }
}

// $ds = new Model();
// $ds->name = 'Arthur Dent';
// $ds->group = 'Codeup';
// $ds->age = 42;

// var_dump($ds);

//Im not done - I need to echo out the getter and setter - not var_dump!