<?php

include_once __DIR__ . '/Strumenti_musicali.php';

// * ACUSTICI 

// ** classe estesa di Strumenti_musicali 

// * 

class Acustici extends Strumenti_musicali {
    public $available;

    public function setAvailability($available) {
        $this->available = $available;
    }

    public function getAvailability(){
        return $this->available;
    }

     // protected function printProducts() {
    //   return $this->nuovo_usato == 'new' ? 'nuovo ' : 'usato '; 
    
      //   dovrei però creare una nuova variabile e i rispettivi parametri per usare questa condizione in tutte le altre pagine php e potrei sovrascrivere la funzione 
    //   della classe P A D R E 
    // }


}