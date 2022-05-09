<?php 
include_once __DIR__ . "/index.php";

class PetFood {
    protected $brand;
    protected $forWhichAnimal;
    protected $composition;
    protected $price;
    protected $container;
    protected $expiryDate;
    
    /**
     * Construct for PetFood
     *
     * @param  mixed $brand Name of the brand
     * @param  mixed $forWhichAnimal For wich animal in the food
     * @param  mixed $composition Ingredient in it
     * @param  mixed $price Price
     * @param  mixed $container Container of food 
     * @param  mixed $expiryDate Expiry date of food
     * @return void
     */
    function __construct($brand, $forWhichAnimal, $composition, $price, $container, $expiryDate) {
        parent::__construct($name, $city, $address, $siteUrl);
        $this->brand = $brand;
        $this->forWhichAnimal = $forWhichAnimal;
        $this->composition = $composition;
        $this->price = $price;
        $this->container = $container;
        $this->expiryDate = $expiryDate;
    }

    

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Get the value of forWhichAnimal
     */ 
    public function getForWhichAnimal()
    {
        return $this->forWhichAnimal;
    }

    /**
     * Set the value of forWhichAnimal
     *
     * @return  self
     */ 
    public function setForWhichAnimal($forWhichAnimal)
    {
        $this->forWhichAnimal = $forWhichAnimal;
        return $this;
    }

    /**
     * Get the value of composition
     */ 
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * Set the value of composition
     *
     * @return  self
     */ 
    public function setComposition($composition)
    {
        $this->composition = $composition;
        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get the value of container
     */ 
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Set the value of container
     *
     * @return  self
     */ 
    public function setContainer($container)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * Get the value of expiryDate
     */ 
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set the value of expiryDate
     *
     * @return  self
     */ 
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }
}
?>