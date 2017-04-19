<?php

require_once 'ado.class.php';

class NumeroAdo extends Ado {

    public function alteraObjeto(\Model $numeroModel) {
        $query = " update numero "
                . " set"
                . "  telefone        = '{$numeroModel->getTelefone}', ";

        return $this->executaQuery($query);
    }

    public function consultaArrayDeObjetos() {
        $query = " Select * from listatelefonica ";

        return $this->executaQueryConsulta($query);
    }

    public function consultaObjeto($idConsulta) {
        $query = " Select * from listatelefonica where telefone_id = '{$idConsulta}' ";

        return $this->executaQueryConsulta($query);
    }

    public function excluiObjeto(\Model $numeroModel) {
        $query = " delete from listatelefonica "
                . " where telefone_id = '{$numeroModel->getTelefoneId}' ";

        return $this->executaQuery($query);
    }

    public function incluiObjeto(\Model $numeroModel) {
        $query = " insert into listatelefonica "
                . "  telefone "
                . "values"
                . " (null, "
                . "  '{$numeroModel->getTelefone}') ";

        return $this->executaQuery($query);
    }

    public function montaObjeto($linha) {
        $telefoneId = $linha ["telefone_id"];
        $telefone = $linha ["telefone"];
        $nomeNomeId = $linha ["nome_nome_id"];
        
        return new NumeroModel($telefoneId, $telefone, $nomeNomeId);
    }

}
