

<?php
class person
{
    private $FirstName;
    private $LastName;
    private $Email;
    private $Password;
    private $phoneno;
    private $address;
    private $propic;

    function __construct($FirstName, $LastName, $Email, $Password,$propic,$phoneno,$address)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->propic= $propic;
        $this->phoneno = $phoneno;
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
    public function getphoneno()
    {
        return $this->phoneno;
    }
    public function getaddress()
    {
        return $this->address;
    }
    public function getPassword()
    {
        return $this->Password;
    }
    
    public function getpic(){
        return $this->propic;
    }
}

class buyer extends person
{
    private $Buyer_id;
    
    function __construct($FirstName, $LastName, $Email, $Password, $propic,$phoneno,$address, $Buyer_id )
    {
        parent::__construct($FirstName, $LastName, $Email, $Password,$propic,$phoneno,$address);
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
    
    function __construct($FirstName, $LastName, $Email, $Password,  $propic,$phoneno,$address,  $Seller_id)
    {
        parent::__construct($FirstName, $LastName, $Email, $Password,$propic,$phoneno,$address);
        $this->Seller_id = $Seller_id;
    }
    public function getsellerId()
    {
        return $this->Seller_id;
    }
}