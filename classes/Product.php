<?php 
class Product {
    protected $brand;
    protected $name;
    protected $price;
    protected $description;
    protected $forWhichAnimal;

    function __construct($brand, $name, $price, $description, $forWhichAnimal) {
        $this->brand = $brand;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->forWhichAnimal = $forWhichAnimal;
    }
}
?>