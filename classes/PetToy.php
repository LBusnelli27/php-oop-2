<?php 
include_once __DIR__ . "/classes/Product.php";

class PetToy extends Product {
    protected $brand;
    protected $forWhichAnimal;
    protected $material;
    
    /**
     * Construct for PetToy
     *
     * @param  mixed $brand Name of the brand
     * @param  mixed $forWhichAnimal For wich animal is the toy
     * @return void
     */
    function __construct($brand, $forWhichAnimal, $material) {
        parent::__construct($name, $price, $description);
        $this->brand = $brand;
        $this->forWhichAnimal = $forWhichAnimal;
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
     * Get construct for PetToy
     */ 
    public function getForWhichAnimal()
    {
        return $this->forWhichAnimal;
    }

    /**
     * Set construct for PetToy
     *
     * @return  self
     */ 
    public function setForWhichAnimal($forWhichAnimal)
    {
        $this->forWhichAnimal = $forWhichAnimal;
        return $this;
    }

    /**
     * Get construct for PetToy
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set construct for PetToy
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;
        return $this;
    }
}
?>