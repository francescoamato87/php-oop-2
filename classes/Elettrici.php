<?php

include_once __DIR__ . '/Strumenti_musicali.php';

// * ELETTRICI 

// ** classe estesa di Strumenti_musicali 

// * 

class Elettrici extends Strumenti_musicali {

public $costo_spedizione;

public function __construct($chitarre, $pianoforti, $batterie, $costo_spedizione  ) {
    // 1 passare prima i valori principali al padre
    parent::__construct ($chitarre, $pianoforti, $batterie);
    
    // 2 settare i nuovi parametri
    $this->costo_spedizione = $costo_spedizione;    
    }
    public function productCost($distance) {
        $minutes = $distance / ($this->costo_spedizione / 10);
        return number_format($minutes, 0);
    }
   
}