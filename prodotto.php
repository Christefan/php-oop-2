<?php
class Prodotto {
    public $nome;
    public $prezzo;

    function __construct($_nome,$_prezzo){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
    public function getProdotto() {
        return  'Nome prodotto: ' . $this->nome  . ' Prezzo prodotto: ' . $this->prezzo;
    }
}
?>