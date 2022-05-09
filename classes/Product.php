<?php 
class Product {
    protected $brand;
    protected $name;
    protected $price;
    protected $description;
    protected $forWhichAnimal;
    
    /**
     * Construct for Product
     *
     * @param  mixed $brand Brand name of product
     * @param  mixed $name Name of product
     * @param  mixed $price Price of product
     * @param  mixed $description Product description
     * @param  mixed $forWhichAnimal For wich animal is the product
     * @return void
     */
    function __construct($brand, $name, $price, $description, $forWhichAnimal) {
        $this->brand = $brand;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->forWhichAnimal = $forWhichAnimal;
    }

    /**
     * Get construct for Product
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set construct for Product
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Get construct for Product
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set construct for Product
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get construct for Product
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set construct for Product
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get construct for Product
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set construct for Product
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get construct for Product
     */ 
    public function getForWhichAnimal()
    {
        return $this->forWhichAnimal;
    }

    /**
     * Set construct for Product
     *
     * @return  self
     */ 
    public function setForWhichAnimal($forWhichAnimal)
    {
        $this->forWhichAnimal = $forWhichAnimal;
        return $this;
    }
}
?>