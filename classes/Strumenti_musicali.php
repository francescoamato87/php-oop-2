<?php

// Strumenti_musicali CLASS

// Parent Class -- modello principale

// * 

class Strumenti_musicali {

    // Proprietà
    public $chitarre;
    public $pianoforti;
    public $batterie;
    // public $nuovo_usato;

    // Costruttore --->installazione tipica (MODELLO + I SUOI ATTRIBUTI + COME ASSSEGNERO UN VALORE ALLA CREAZIONE DI UN OGGETTO DI QUESTO MODELLO)
    public function __construct($chitarre, $pianoforti, $batterie) {
        $this->chitarre = $chitarre;
        $this->pianoforti = $pianoforti;
        $this->batterie = $batterie;
    }
    // Metodi
    public function printProducts() {
      return $this->chitarre . ' - ' .  $this->pianoforti;  //   <------FUNZIONE DI STAMPA DELLE PROPRIETA'
    }



}
