<?php
require_once 'model.class.php';

class NomeModel extends Model{
 
    private $nome = null;
    private $nomeTelefone = null;
    
    function __construct($nome = null, $nomeTelefone = null) {
        $this->nome         = $nome;
        $this->nomeTelefone = $nomeTelefone;
    }
    function getNome() {
        return $this->nome;
    }

    function getNomeTelefone() {
        return $this->nomeTelefone;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNomeTelefone($nomeTelefone) {
        $this->nomeTelefone = $nomeTelefone;
    }


    
}

?>