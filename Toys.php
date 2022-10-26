<?php

require_once __DIR__ . '/Product.php';

// Giochi
class Toys extends Product{
    public $material;
    public $age;

    function __construct($_material,$_age,$_price, $_code, $_repart){
    parent::__construct($_price, $_code, $_repart);
    $this-> material = $_material;
    $this-> age = $_age;
 }
}


?>