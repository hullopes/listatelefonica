<?php

require_once 'view.class.php';

class index extends View {

    public function getObjetoModel() {
        
    }

    public function montaDados(\Model $empresasModel) {
        $this->table = null;

        $empresaId     = $empresasModel->getEmpresaId();
        $empresaNome   = $empresasModel->getEmpresaNome();
        $empresaLog    = $empresasModel->getEmpresaLog();
        $empresaEnd    = $empresasModel->getEmpresaEnd();
        $empresaNro    = $empresasModel->getEmpresaNro();
        $empresaBairro = $empresasModel->getEmpresaBairro();
        $empresaCity   = $empresasModel->getEmpresaCity();
        $empresaCep    = $empresasModel->getEmpresaCep();

        $this->table .= parent::getMensagem();

        foreach (range('A', 'Z') as $letra) {
            print $letra;
        }
        
        
    }

    public function getAcao() {
        if (isset($_POST['bt'])) {
            return $_POST['bt'];
        } else {
            return 'nov';
        }
    }

}
?>

