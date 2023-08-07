<?php

class item{
    private $ItemNumber;
    private $Item_Title;
    private $End_price;
    private $seller_id;
    private $buyer_id;
    private $item_image;

    public function __construct($ItemNumber,$Item_Title,$End_price,$seller_id,$buyer_id,$item_image)
    {
        $this->ItemNumber = $ItemNumber;
        $this->Item_Title = $Item_Title;
        $this->End_price = $End_price;
        $this->seller_id = $seller_id;
        $this->buyer_id = $buyer_id;
        $this->item_image = $item_image;
    }
    public function getItemNumber(){
        return $this->ItemNumber;
    }
    public function getItemTitle(){
        return $this->Item_Title;
    }
    public function getEndPrice(){
       return $this->End_price;
    }
    public function getBuyerId(){
       return $this->buyer_id;
    }
    public function getItemImage(){
       return $this->item_image;
    }

}


?>