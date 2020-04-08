<?php


    // create product class
 class Product 
 {

    public $ID;
    public $Title;
    public $Type;
    public $Price;

    public function __construct($ID, $Title,  $Type, $Price) 
    
    {

        $this->ID = $ID;

        $this->Title = $Title;

        $this->Type = $Type;

        $this->Price = $Price;

    }

 }

$knife = new Product(1, 'Knife', 'Kitchen', 9.99);

$car = new Product(2, 'Car', 'Vehicle', 34.9999);

$computer = new Product(3, 'computer', 'IT', 1000.00);
