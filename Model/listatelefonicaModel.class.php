<?php

require_once 'model.class.php';

class ListaTelefonicaModel extends Model {

    private $listaId     = null;
    private $listaNome   = null;
    private $listaNumero = null;

    function __construct($listaId = null, $listaNome = null, $listaNumero = null) {
        $this->listaId     = $listaId;
        $this->listaNome   = $listaNome;
        $this->listaNumero = $listaNumero;
    }

    function getListaId() {
        return $this->listaId;
    }

    function getListaNome() {
        return $this->listaNome;
    }

    function getListaNumero() {
        return $this->listaNumero;
    }

    function setListaId($listaId) {
        $this->listaId = $listaId;
    }

    function setListaNome($listaNome) {
        $this->listaNome = $listaNome;
    }

    function setListaNumero($listaNumero) {
        $this->listaNomero = $listaNumero;
    }

}

?>