<?php 

include_once __DIR__ . '/bancomat.php';

class User{
    protected $name;
    protected $lastname;
    protected $age;
    protected $is_registered;
    protected $sconto;
    protected $carta_credito;



    function __construct($_name,$_lastname,$_age,$_is_registered,$_sconto, $_carta_credito){

        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
        $this->is_registered = $_is_registered;
        $this->sconto = $this->setSconto();
        $this->setCarta_credito($_carta_credito);


    }

    

    public function setSconto(){
        if($this->is_registered){
            $this->sconto = 20;
            return "verrà applicato uno sconto del 20% dato che l'utente è registrato";
        } else{
            $this-> sconto =0;
            return "non verrà applicato uno sconto del 20% dato che l'utente non è registrato";
        }
        return  $this->sconto;
    }

    public function getName(){
        return $this->name = $_name;
    }

    public function getAge(){
        if($this->age < 25){
            $this->sconto = 20;
            return "inoltre l'utente avrà un ulteriore sconto del 20% in più dato che ha meno di 25 anni";
        } else{
            $this->sconto = 0;
            return "non ci sarà ulteriore sconto dato che l'utente ha più di 25 anni";
        }
        return $this->sconto;
    }
    public function setCarta_credito($_carta_credito){
        if(!$_carta_credito instanceof Bancomat) return false;
        $this->carta_credito = $_carta_credito;
    }
    public function getLastName(){
        return $this->lastname = $_lastname;
    }
    public function getIs_registered(){
        return $this->is_registered = $_is_registered;
    }
    
}
    

?>