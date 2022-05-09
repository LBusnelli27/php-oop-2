<?php 
class PaymentMethod {
    protected $paymentType;
    protected $fullName;
    protected $number;
    protected $expiryDate;
    protected $cvv;
    
    /**
     * Construct for PaymentMethod
     *
     * @param  mixed $paymentType Type of payment
     * @param  mixed $fullName Full name on the card
     * @param  mixed $number Number of card
     * @param  mixed $expiryDate Expiry date of card
     * @param  mixed $cvv CVV of card
     * @return void
     */
    function __construct($paymentType, $fullName, $number, $expiryDate, $cvv) {
        $this->paymentType = $paymentType;
        $this->fullName = $fullName;
        $this->number = $number;
        $this->expiryDate = $expiryDate;
        $this->cvv = $cvv;
    }

    /**
     * Get __construct
     */ 
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Get __construct
     */ 
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Get __construct
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Get __construct
     */ 
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Get __construct
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set __construct
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
        return $this;
    }
}
?>