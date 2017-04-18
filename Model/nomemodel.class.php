<?php
require_once 'model.class.php';

class NomeModel extends Model{
 
    private $nomeId = null;
    private $nome = null;
    
    function __construct($nomeId = null, $nome = null) {
        $this->nomeId = $nomeId;
        $this->nome   = $nome;
    }

    function getNomeId() {
        return $this->nomeId;
    }

    function getNome() {
        return $this->nome;
    }
    
}

?>