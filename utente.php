<?php

class Utente {

    public $name;
    public $email;
    
    public $cart = [];

    function __construct($_name, $_email) {
        $this->name = $_name;
        $this->email = $_email;
    }

    function addProductToCart($_product) {
        if ($_product->disponibile) {
            $this->cart[] = $_product;
            return true;
        } else {
            return false;
        }
    }

    function getTotalPrice() {
        $total_price = 0;
        foreach($this->cart as $item) {
            $total_price += $item->prezzo;
        }
        return $total_price;
    }
}