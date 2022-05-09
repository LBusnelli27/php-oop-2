<?php 
include_once __DIR__ . "/classes/Client.php";

class PaymentMethod extends Client {
    protected $fullName;
    protected $number;
    protected $expiryDate;
    protected $cvv;
    
    /**
     * Construct for PaymentMethod
     *
     * @param  mixed $fullName Full name on the card
     * @param  mixed $number Number of card
     * @param  mixed $expiryDate Expiry date of card
     * @param  mixed $cvv CVV of card
     * @return void
     */
    function __construct($fullName, $number, $expiryDate, $cvv) {
        parent::__construct($firstName, $lastName, $city, $address, $isRegistered);
        $this->fullName = $fullName;
        $this->number = $number;
        $this->expiryDate = $expiryDate;
        $this->cvv = $cvv;
    }

    

    /**
     * Get construct for PaymentMethod
     */ 
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set construct for PaymentMethod
     *
     * @return  self
     */ 
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * Get construct for PaymentMethod
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set construct for PaymentMethod
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Get construct for PaymentMethod
     */ 
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set construct for PaymentMethod
     *
     * @return  self
     */ 
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * Get construct for PaymentMethod
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set construct for PaymentMethod
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }
}
?>