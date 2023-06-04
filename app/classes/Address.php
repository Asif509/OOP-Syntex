<?php


namespace App\classes;


class Address
{
    public $presentAddress ='Dhaka';
    protected $permanentAddress ='kishoreganj';
    private $gfAddress ='Banani';
    protected $Address = 'BITM';

    public function  one ()
    {

        echo 'This is One';
    }
    protected function  two ()
    {
        echo 'This is two';

    }
    private function  three ()
    {
        echo 'This is three';
    }


}