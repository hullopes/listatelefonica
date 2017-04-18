<?php

require_once 'ado.class.php';

class NomeAdo extends Ado {

    public function alteraObjeto(\Model $nomeModel) {
        $query = " update nome "
                . " set"
                . "  nome        = '{$nomeModel->getNome}', ";

        return $this->executaQuery($query);
    }

    public function consultaArrayDeObjetos() {
        $query = " Select * from listatelefonica ";

        return $this->executaQueryConsulta($query);
    }

    public function consultaObjeto($idConsulta) {
        $query = " Select * from listatelefonica where nome_id = '{$idConsulta}' ";

        return $this->executaQueryConsulta($query);
    }

    public function excluiObjeto(\Model $nomeModel) {
        $query = " delete from listatelefonica "
                . " where nome_id = '{$nomeModel->getNomeId}' ";

        return $this->executaQuery($query);
    }

    public function incluiObjeto(\Model $nomeModel) {
        $query = " insert into listatelefonica "
                . " (nome_id, "
                . "  nome "
                . "values"
                . " (null, "
                . "  '{$nomeModel->getNomeId}', "
                . "  '{$nomeModel->getNome}') ";

        return $this->executaQuery($query);
    }

    public function montaObjeto($linha) {
        $nomeId = $linha["nome_id"];
        $nome   = $linha["nome"];

        return new NomeModel($nomeId, $nome);
    }

}
