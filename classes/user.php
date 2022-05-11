<?php 



class User{
    protected $name;
    protected $lastname;
    protected $age;
    protected $is_registered;
    protected $sconto;
    protected $carta_credito;


        
    
    function __construct($_name,$_lastname,$_age,$_is_registered,$_sconto, $_carta_credito){
        if(is_numeric($_name)){
            throw new Exception("non è possibile inserire un numero al posto di un nome",500 );
        }
        $this->name = $_name;
        $this->lastname = $_lastname;

        if(is_string($_age)){
            throw new Exception("non è possibile inserire una stringa al posto di un numero",500 );
        }
        $this->age = $_age;
        $this->is_registered = $_is_registered;
        $this->sconto = $this->setSconto();
        $this->carta_credito = $_carta_credito ;


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
    }
    
    public function setCarta_credito($price){
        if( $price > $this->carta_credito){
            return "Saldo non disponibile sulla carta";
        }

        return $this->carta_credito - $price;
    }
    
    public function getIs_registered(){
        return $this->is_registered = $_is_registered;
    }
}

?>