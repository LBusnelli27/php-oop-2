<?php 
include_once __DIR__ . "/classes/Product.php";

class PetToy extends Product {
    protected $material;
    
    /**
     * Construct for PetToy
     *
     * @param  mixed $material Material of which it is made
     * @return void
     */
    function __construct($material) {
        parent::__construct($brand, $name, $price, $description, $forWhichAnimal);
        $this->material = $material;
    }


    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;
    }
}
?>