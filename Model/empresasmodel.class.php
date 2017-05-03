<?php

require_once 'model.class.php';

class empresaModel extends Model {

    private $empresaId     = null;
    private $empresaNome   = null;
    private $empresaLog    = null;
    private $empresaEnd    = null;
    private $empresaNro    = null;
    private $empresaBairro = null;
    private $empresaCity   = null;
    private $empresaCep    = null;

    function __construct($empresaId = null, $empresaNome = null, $empresaLog = null, $empresaEnd = null, $empresaNro = null, $empresaBairro = null, $empresaCity = null, $empresaCep = null) {
        $this->empresaId     = $empresaId;
        $this->empresaNome   = $empresaNome;
        $this->empresaLog    = $empresaLog;
        $this->empresaEnd    = $empresaEnd;
        $this->empresaNro    = $empresaNro;
        $this->empresaBairro = $empresaBairro;
        $this->empresaCity   = $empresaCity;
        $this->empresaCep    = $empresaCep;
    }

    function getEmpresaId() {
        return $this->empresaId;
    }

    function getEmpresaNome() {
        return $this->empresaNome;
    }

    function getEmpresaLog() {
        return $this->empresaLog;
    }

    function getEmpresaEnd() {
        return $this->empresaEnd;
    }

    function getEmpresaNro() {
        return $this->empresaNro;
    }

    function getEmpresaBairro() {
        return $this->empresaBairro;
    }

    function getEmpresaCity() {
        return $this->empresaCity;
    }

    function getEmpresaCep() {
        return $this->empresaCep;
    }

    function setEmpresaId($empresaId) {
        $this->empresaId = $empresaId;
    }

    function setEmpresaNome($empresaNome) {
        $this->empresaNome = $empresaNome;
    }

    function setEmpresaLog($empresaLog) {
        $this->empresaLog = $empresaLog;
    }

    function setEmpresaEnd($empresaEnd) {
        $this->empresaEnd = $empresaEnd;
    }

    function setEmpresaNro($empresaNro) {
        $this->empresaNro = $empresaNro;
    }

    function setEmpresaBairro($empresaBairro) {
        $this->empresaBairro = $empresaBairro;
    }

    function setEmpresaCity($empresaCity) {
        $this->empresaCity = $empresaCity;
    }

    function setEmpresaCep($empresaCep) {
        $this->empresaCep = $empresaCep;
    }

}

?>