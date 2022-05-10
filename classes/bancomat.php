<?php 

include_once __DIR__ . '/shop.php';


    class Bancomat{
        protected $number;
        protected $scadenza;
        protected $disponibilità;

    function __construct($_number,$_scadenza,$_disponibilità){
    
        $this->number = $_number;
        $this->scadenza = $_scadenza;
        $this->disponibilità = $_disponibilità;
    }

    public function getnumber(){
        return $this->number;
    }
    public function getscadenza(){
        return $this->scadenza;
    }
    public function getdisponibilità(){
        return $this->disponibilità . '€';
    }

    public function setdisponibilità($disponibilità){
        $this->disponibilità = $disponibilità;
    }
}

?>