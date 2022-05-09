<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->


<?php 

class ShopAnimals{
    protected $razza;
    protected $isVailability;

    function __construct($_razza,$_isVailability){
        $this->razza = $_razza;
        $this->isVailability = $_isVailability;
    }

    public function getRazza(){
        return $this->razza;
    }
    public function getIsVailability(){
        return $this->isVailability;
    }

}


?>