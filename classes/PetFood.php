<?php 
include_once __DIR__ . "/classes/Product.php";

class PetFood extends Product {
    protected $composition;
    protected $container;
    protected $expiryDate;
    
    /**
     * Construct for PetFood
     *
     * @param  mixed $composition Ingredient in it
     * @param  mixed $container Container of food 
     * @param  mixed $expiryDate Expiry date of food
     * @return void
     */
    function __construct($composition, $container, $expiryDate) {
        parent::__construct($brand, $name, $price, $description, $forWhichAnimal);
        $this->composition = $composition;
        $this->container = $container;
        $this->expiryDate = $expiryDate;
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
    }
}
?>