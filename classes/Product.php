<?php 
class Product {
    protected $name;
    protected $price;
    protected $description;

    function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
}
?>