<?php

require_once '.index.php';
require_once '../Model/empresasmodel.class.php';
require_once '../Ado/empresasado.class.php';

class empresasController {

    private $index         = null;
    private $empresasModel = null;
    private $empresasAdo   = null;
    private $acao          = "nov";

    function __construct() {
        $this->index         = new index();
        $this->empresasModel = new empresaModel();
        $this->empresasAdo   = new empresasAdo();

        $this->acao = $this->index->getAcao();

        switch ($this->acao) {
            case 'con':
                $this->consulta();

            default:
                break;
        }
        $this->index->displayHtml($this->empresasModel);
    }

    public function Consulta() {
        $letraInicial = $this->index->getLetraInicial();
        $this->empresasModel = $this->empresasAdo->buscaObjeto($letraInicial);
        
        
    }

}
