<?php

require_once __DIR__ . '/Product.php';

// Cibo
class Food extends Product{
   public $expire_date;
   public $type;
   public $weight;

    function __construct($_expire_date,$_type,$weight,$_price, $_code, $_repart){
    parent::__construct($_price, $_code, $_repart);
    $this-> expire_date = $_expire_date;
    $this-> type = $_type;
    $this-> weight = $_weight;
 }
}


?>