<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Toys.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/DogKennel.php';

// Utente
$daniele = new User ('Daniele','Grada',true,'054006547534', 2023);

echo "<pre>";
var_dump($daniele);
echo "</pre>";

// Prodotto
$dog_kennel = new Dog_Kennel(80,'small',30,00002345,'dog');
echo "<pre>";
var_dump($dog_kennel);
echo "</pre>";

// Aggiunge al Carrello
$daniele-> AddToCart($dog_kennel);

echo "<pre>";
var_dump($daniele);
echo "</pre>";

$daniele->chechRegister();

?>