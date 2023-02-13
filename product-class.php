<?php

class Product
{
    protected $sku = "";
    protected $name = "";
    protected $price = "";

    protected static $product_fields = array('sku', 'name', 'price');


    function __construct()
    {
    }


    // initialization properties with setter methods
    // protected function setProduct()
    // {
    //     $this->sku;
    //     $this->price;
    //     $this->name;
    // }
}
