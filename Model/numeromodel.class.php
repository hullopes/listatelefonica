<?php
require_once 'model.class.php';

class NumeroModel extends Model{

    private $telefoneId = null;
    private $telefone = null;
    private $nomeNomeId = null;

    function __construct($telefoneId, $telefone, $nomeNomeId) {
        $this->telefoneId = $telefoneId;
        $this->telefone   = $telefone;
        $this->nomeNomeId = $nomeNomeId;
    }
    function getTelefoneId() {
        return $this->telefoneId;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNomeNomeId() {
        return $this->nomeNomeId;
    }

    function setTelefoneId($telefoneId) {
        $this->telefoneId = $telefoneId;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNomeNomeId($nomeNomeId) {
        $this->nomeNomeId = $nomeNomeId;
    }



}
?>