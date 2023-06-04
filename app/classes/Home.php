<?php

namespace App\classes;
use App\classes\Address;
use App\classes\Example;
use App\classes\ExampleTwo;
use App\classes\ExampleThree;



class Home extends ExampleThree implements Example, ExampleTwo
{
    use TraitExample;

    public $name;
    protected $mobile;
    private $password;
    public $address;

    public function five()
    {
//      parent::six();
      $this->eight();
    }

    public function exampleThree()
    {
        echo 'three';
    }

    private static $brand = 'BITM';

    public function __construct()
    {
        $this->name = 'kazi Nazrul';
        $this->mobile ='2938838338';
        $this->password ='12345';
        $this->address ='BASIS';

    }

    public function exampleOne()
    {
        echo 'hi';
    }


    public function exampleTwo()
    {
        echo 'hello';

    }

    public static function four ()
    {
        echo 'Hello Basis Bitm';

    }

    public static function name ()
    {
        echo self::$brand;

    }

    protected function mobile ()
    {

    }
    private function password()
    {
        echo 'bitm';
    }
}