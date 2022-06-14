<?php
require_once __DIR__ . "/prodotto.php";
class Cucce extends Prodotto {
   public $descrizione;
   public $tipo;


   function __construct($_nome, $_prezzo, $_descrizione,$_tipo){
    parent::__construct($_nome, $_prezzo);
    $this->descrizione = $_descrizione;
    $this->tipo = $_tipo;    
    }

    public function getCucce() {
        return . 'Nome prodotto: ' . $this->nome . ' Prezzo prodotto: ' . $this->prezzo . 'Descrizione cucce: '. $this->descrizione . 'Tipo di cucce: ' . $this->tipo;
    }
}
?>