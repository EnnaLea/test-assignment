<?php

class Product extends Database
{
    protected $sku = "";
    protected $name = "";
    protected $price = "";

    // protected static $product_fields = array('sku', 'name', 'price');


    function __construct($sku, $name, $price)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price bn;
    }
}
