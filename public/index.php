<?php

echo "<br>";
date_default_timezone_set('Europe/Moscow');




class ObjectCreated
{


    private const SIMPLE_FORMAT = 'Y-m-d H:i:s';

    private static $objCreateTime;

    public function __construct()
    {

        $this->objCreateTime = new DateTime();
    }


    public function showTime($format)
    {
        if ($format) {
            return $this->objCreateTime->format($format);
        } else {
            return $this->objCreateTime->format(ObjectCreated::SIMPLE_FORMAT);
        }
    }

    public function __toString()
    {

        return $this->objCreateTime->format(ObjectCreated::SIMPLE_FORMAT);
    }


    public function __invoke($arg)
    {

        print_r($this->objCreateTime->format($arg));
    }
}




$newObj = new ObjectCreated();

print_r($newObj->showTime('H:i:s')); //As function

echo "<br>";
echo "<br>";


echo $newObj;           //As string

echo "<br>";
echo "<br>";


$newObj("H:i");         //As obj function


//test commit