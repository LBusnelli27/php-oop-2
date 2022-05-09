<?php 
include_once __DIR__ . "/classes/Client.php";
include_once __DIR__ . "/classes/PetFood.php";

class Shop {
    protected $name;
    protected $city;
    protected $address;
    protected $siteUrl;

    /**
     * Construct for Shop
     *
     * @param  mixed $name Name of the shop
     * @param  mixed $city City of shop
     * @param  mixed $address Address of shop
     * @param  mixed $siteUrl Shop website URL
     * @return void
     */
    function __construct($name, $city, $address, $siteUrl) {
        parent::__construct($firstName, $forWhilastNamechAnimal, $city, $address);
        parent::__construct($brand, $forWhichAnimal, $composition, $price, $container, $expiryDate);
        $this->name = $name;
        $this->city = $city;
        $this->address = $address;
        $this->siteUrl = $siteUrl;
    }

    /**
     * Get construct for Shop
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set construct for Shop
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get construct for Shop
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set construct for Shop
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get construct for Shop
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set construct for Shop
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get construct for Shop
     */ 
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * Set construct for Shop
     *
     * @return  self
     */ 
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;
        return $this;
    }
}
?>