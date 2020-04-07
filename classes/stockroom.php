<?php

require 'product.php';

// create stockroom class
 class Stockroom 
 {

    public $product;
    public $quantity;

    public function __construct($product, $quantity) 
    
    {

        $this->product = $product;

        $this->$quantity = $quantity;

    }

 }

 // return stock items and convert to arrays
$knifesinstock = (array)new Stockroom($knife, 10);
$carsinstock = (array)new StockRoom($car, 2);
$computersinstock = (array)new StockRoom($computer,5);


var_dump($knifesinstock);


