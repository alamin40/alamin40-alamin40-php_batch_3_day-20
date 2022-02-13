<?php

namespace App\classes;
use App\Classes\User;
use  App\classes\ExampleOne;
use  App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;


class Student extends Teacher implements ExampleOne

{
    use Category;

    protected $country = 'Bangladesh ';
    public static $area = 'Farmgate';

    public function __construct()
    {
        $this->name = 'Riaj';
        $this->city = 'Savar';
    }
    public function manage()
    {
        echo "Institute name is $this->name and city is $this->city and country is $this->country";



    }

    public function one()
    {
//        echo 'Hello One';
//        echo $this->test();
//        $this->hello();
        echo $this->country;
        echo self::$area;


    }

    public function two()
    {
        // TODO: Implement two() method.
    }

    public function three()
    {
        // TODO: Implement three() method.
    }

    public function test()
    {
        echo 'Hello Test';
    }

    public static function demo()
    {
        echo 'hello demo';
    }
}