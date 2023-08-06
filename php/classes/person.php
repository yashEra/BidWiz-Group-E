

<?php
class person
{
    private $FirstName;
    private $LastName;
    private $Email;
    private $Password;
    private $Phone;
    private $address;

    function __construct($FirstName, $LastName, $Email, $Password,$Phone,$address)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->Phone = $Phone;
        $this->address = $address;
    }
    public function getFirstName()
    {
        return $this->FirstName;
    }
    public function getLastName()
    {
        return $this->LastName;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    public function getPassword()
    {
        return $this->Password;
    }
    public function getPhoneNo()
    {
        return $this->Phone;
    }
    public function getAddress()
    {
        return $this->address;
    }
}

class buyer extends person
{
    private $Buyer_id;
    
    function __construct($FirstName, $LastName, $Email, $Password, $Phone, $Buyer_id, $address)
    {
        parent::__construct($FirstName, $LastName, $Email, $Password,$Phone,$address);
        $this->Buyer_id = $Buyer_id;
    }
    public function getbuyerId()
    {
        return $this->Buyer_id;
    }
    
}

class seller extends person
{
    private $Seller_id;
    
    function __construct($FirstName, $LastName, $Email, $Password, $address, $Seller_id, $Phone)
    {
        parent::__construct($FirstName, $LastName, $Email, $Password,$Phone,$address);
        $this->Seller_id = $Seller_id;
    }
    public function getsellerId()
    {
        return $this->Seller_id;
    }
}