<?php 
include_once __DIR__ . "/classes/PaymentMethod.php";

class Client {
    protected $firstName;
    protected $lastName;
    protected $city;
    protected $address;
    
    /**
     * __construct
     *
     * @param  mixed $firstName Client first name
     * @param  mixed $lastName Client last name
     * @param  mixed $city Client city
     * @param  mixed $address Client address
     * @return void
     */
    function __construct($firstName, $lastName, $city, $address) {
        parent::__construct($paymentType, $fullName, $number, $expiryDate, $cvv);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->city = $city;
        $this->address = $address;
    }

    /**
     * Get __construct
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get __construct
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get __construct
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get __construct
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}
?>