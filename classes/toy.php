<?php 

include_once __DIR__ . '/shop.php';

class Toy extends ShopAnimals{
    protected $name;
    protected $colour;
    protected $country;
    protected $size;


function __construct($_name,$_colour,$_country,$_size,$_razza,$_isVailability){
    parent:: __construct($_razza, $_isVailability);
    $this->name = $_name;
    $this->colour = $_colour;
    $this->country = $_country;
    $this->size = $_size;
}

public function getName(){
    return $this->name;
}
public function getColour(){
    return $this->colour;
}
public function getCountry(){
    return $this->country;
}
public function getSize(){
    return $this->size;
}
}


?>