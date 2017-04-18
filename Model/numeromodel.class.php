<?php
require_once 'model.class.php';

class NumeroModel extends Model{

    private $telifoneId = null;
    private $telifone = null;
    private $nomeNomeId = null;

    function __construct($telifoneId = null, $telifone = null, $nomeNomeId = null) {
        $this->telifoneId = $telifoneId;
        $this->telifone   = $telifone;
        $this->nomeNomeId = $nomeNomeId;
    }

    function getTelifoneId() {
        return $this->telifoneId;
    }

    function getTelifone() {
        return $this->telifone;
    }

    function getNomeNomeId() {
        return $this->nomeNomeId;
    }

    function setTelifoneId($telifoneId) {
        $this->telifoneId = $telifoneId;
    }

    function setTelifone($telifone) {
        $this->telifone = $telifone;
    }

    function setNomeNomeId($nomeNomeId) {
        $this->nomeNomeId = $nomeNomeId;
    }



}
?>