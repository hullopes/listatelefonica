<?php

require_once 'ado.class.php';

class empresasAdo extends Ado {

    public function alteraObjeto(\Model $objetoModel) {
        
    }

    public function consultaArrayDeObjetos() {
        
    }

    public function consultaObjeto($idConsulta) {
        
    }

    public function consultaPorLetraInicial($letraIncial) {
        $query = "SELECT * FROM `empresas` WHERE nome LIKE '{$letraIncial}%'";

        return $this->executaQueryConsulta($query);
    }

    public function excluiObjeto(\Model $objetoModel) {
        
    }

    public function incluiObjeto(\Model $objetoModel) {
        
    }

    public function montaObjeto($linha) {
        
    }

}
