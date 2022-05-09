<?php 

include_once __DIR__ . '/shop.php';


    class Food extends ShopAnimals{
        protected $deadline;
        protected $ingrediants;
        protected $feeding;

    function __construct($_deadline,$_ingrediants,$_feeding,$_razza,$_isVailability){
        parent::__construct($_razza,$_isVailability);
        $this->deadline = $_deadline;
        $this->ingrediants = $_ingrediants;
        $this->feeding = $_feeding;
    }

    public function getDeadline(){
        return $this->deadline;
    }
    public function getIngrediants(){
        return $this->ingrediants;
    }
    public function getFeeding(){
        return $this->feeding;
    }
}

?>