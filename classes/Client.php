<?php 
require_once __DIR__ . '/CreditCard.php';

class Client {
    protected $firstName;
    protected $lastName;
    protected $city;
    protected $address;
    protected $creditCard;
    protected $isRegistered;
    protected $discount;
    
    /**
     * Construct for Client
     *
     * @param  mixed $firstName Client first name
     * @param  mixed $lastName Client last name
     * @param  mixed $city Client city
     * @param  mixed $address Client address
     * @param  mixed $isRegistered Boolean if the client id registered
     * @return void
     */
    function __construct($firstName, $lastName, $city, $address, $creditCard, $isRegistered, $discount) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->city = $city;
        $this->address = $address;
        $this->setCreditCard($credit_card);
        $this->isRegistered = $isRegistered;
        $this->discount = $this->setDiscount();
    }

    /**
     * Get construct for Client
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set construct for Client
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get construct for Client
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set construct for Client
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get construct for Client
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set construct for Client
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get construct for Client
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set construct for Client
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get construct for Client
     */ 
    public function getIsRegistered()
    {
        return $this->isRegistered;
    }

    /**
     * Set construct for Client
     *
     * @return  self
     */ 
    public function setIsRegistered($isRegistered)
    {
        $this->isRegistered = $isRegistered;
    }

    /**
     * Get construct for Client
     */ 
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Set construct for Client
     *
     * @return  self
     */ 
    public function setCreditCard($creditCard)
    {
        if (!$credit_card instanceof CreditCard) {
            return false;
        }
        $this->credit_card = $credit_card;
    }

    /**
     * Get construct for Client
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set construct for Client
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        if ($this->is_registered) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
        return $this->discount;
    }



    public function buyProduct($product)
    {
        if ($this->credit_card->expire < date('Y')) {
            return 'Carta di credito scaduta.';
        }

        if ($this->getBalance() < $product->price) {
            return 'Credito insufficiente';
        }

        if ($this->discount > 0) {
            $price = $product->price - $product->price / 100 * $this->discount;
            $this->credit_card->balance -= $price;
            return "Transazione approvata, lo sconto è $this->discount% e hai speso " . round($price, 2) . "€";
        } else {
            $this->credit_card->balance -= $product->price;
            return "Transazione approvata, nessuno sconto e hai speso " . round($product->price, 2) . "€";
        }
    }
}
?>