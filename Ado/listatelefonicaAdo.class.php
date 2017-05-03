<?php

require_once 'ado.class.php';

class ListatelefonicaAdo extends Ado {

    public function alteraObjeto(\Model $listaTelefonicaModel) {
        $query = " update listatelefonica "
                . " set"
                . " lista_nome        = '{$listaTelefonicaModel->getListaNome}', "
                . " lista_numero        = '{$listaTelefonicaModel->getListaNumero}' "
                . " where lista_id        = '{$listaTelefonicaModel->getListaId}' ";

        return $this->executaQuery($query);
    }

    public function consultaArrayDeObjetos() {
        $query = " Select * from listatelefonica ";

        return $this->executaQueryConsulta($query);
    }

    public function consultaObjeto($idConsulta) {
        
        $query = " Select * from listatelefonica where lista_id = '{$idConsulta}' ";

        return $this->executaQueryConsulta($query);
    }

    public function excluiObjeto(\Model $listaTelefonicaModel) {
        $query = " delete from listatelefonica "
                . " where lista_id = '{$listaTelefonicaModel->getListaId}' ";

        return $this->executaQuery($query);
    }

    public function incluiObjeto(\Model $listaTelefoniaModel) {
        $query = " insert into listatelefonica "
                . "  (lista_id "
                . "  lista_nome "
                . "  lista_numero) "
                . "values"
                . " (null, "
                . "  '{$listaTelefoniaModel->getListaNome}', "
                . "  '{$listaTelefoniaModel->getListaNumero}') ";


        return $this->executaQuery($query);
    }

    public function montaObjeto($linha) {
        $listaId     = $linha["lista_id"];
        $listaNome   = $linha["lista_nome"];
        $listaNumero = $linha["lista_numero"];

        return new ListaTelefonicaModel($listaId, $listaNome, $listaNumero);
    }

}
