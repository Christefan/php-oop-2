<?php
require_once __DIR__ . "/prodotto.php";
class Giochi extends Prodotto {
   public $descrizione;
   public $tipo;


   function __construct($_nome, $_prezzo, $_descrizione,$_tipo){
    parent::__construct($_nome, $_prezzo);
    $this->descrizione = $_descrizione;
    $this->tipo = $_tipo;    
    }

    public function getGiochi() {
        return . 'Nome prodotto: ' . $this->nome . ' Prezzo prodotto: ' . $this->prezzo . 'Descrizione gioco: '. $this->descrizione . 'Tipo di gioco: ' . $this->tipo;
    }
}
?>