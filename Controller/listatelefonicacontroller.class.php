<?php

require_once '../View/listatelefonicaview.class.php';
require_once '../Model/listatelefonicamodel.class.php';
require_once '../Ado/listatelefonicaado.class.php';

class ListaTelefonicaController {

    private $listatelefonicaView  = null;
    private $listatelefonicaModel = null;
    private $listatelefonicaAdo   = null;
    private $acao                 = "nov";

    function __construct() {
        $this->listatelefonicaView  = new ListaTeleFonicaView();
        $this->listatelefonicaModel = new ListaTelefonicaModel();
        $this->listatelefonicaAdo   = new ListatelefonicaAdo();

        $this->acao = $this->listatelefonicaView->getAcao();

        switch ($this->acao) {
            case 'con':
                $this->consulta();

                break;

            case 'inc':
                $this->inclui();

                break;

            case 'alt':
                $this->altera();

                break;

            case 'exc':
                $this->exclui();

                break;

            default:
                break;
        }

        $this->listatelefonicaView->displayHtml($this->listatelefonicaModel);
    }

    public function Consulta() {
        $idConsulta                 = $this->listatelefonicaView->getIdConsulta();
        $this->listatelefonicaModel = $this->listatelefonicaAdo->buscaObjeto($idConsulta);
        if ($this->listatelefonicaModel) {
            return;
        } else {
            if ($this->listatelefonicaModel === 0) {
                $this->usuarioModel->adicionaMensagem("Numero não encontrado!");
                $this->listatelefonicaModel = new ListaTelefonicaModel();
            } else {
                $this->listatelefonicaView->adicionaMensagem("erro ao consulta");
                $this->listatelefonicaView->adicionaMensagem($this->listatelefonicaAdo->getMensagem());
                $this->listatelefonicaModel = new ListaTelefonicaModel();
            }
        }
    }

    public function inclui() {
        $this->listatelefonicaModel = $this->listatelefonicaView->getObjetoModel();

        $R = $this->listatelefonicaAdo->incluiObjeto($this->listatelefonicaModel);
        if ($R) {
            $this->listatelefonicaModel = new ListaTelefonicaModel();
            $this->listatelefonicaView->adicionaMensagem("Inclusão com sucesso!");
        } else {
            if ($R === 0) {
                $this->listatelefonicaView->adicionaMensagem("Telefone não incluiu!");
            } else {
                $this->listatelefonicaView->adicionaMensagem("Erro na inclusão!");
                $this->listatelefonicaView->adicionaMensagem($this->listatelefonicaAdo->getMensagem());
            }
        }
    }

    public function altera() {
        $this->listatelefonicaModel = $this->listatelefonicaView->getObjetoModel();
        $R                          = $this->listatelefonicaAdo->alteraObjeto($this->listatelefonicaModel);
        if ($R) {
            $this->listatelefonicaModel = new ListaTelefonicaModel();
            $this->listatelefonicaView->adicionaMensagem("Telefone Alterado com Sucesso");
        } else {
            $this->listatelefonicaView->adicionaMensagem("Erro ao Alterar o TeleFone");
            $this->listatelefonicaView->adicionaMensagem($this->listatelefonicaAdo->getMensagem());
        }
    }

    public function exclui() {
        $this->listatelefonicaModel = $this->listatelefonicaView->getObjetoModel();
        $R                          = $this->listatelefonicaAdo->excluiObjeto($this->listatelefonicaModel);
        if ($R) {
            $this->listatelefonicaModel = new ListaTelefonicaModel();
            $this->listatelefonicaView->adicionaMensagem("TeleFone excluido com Sucesso");
        } else {
            $this->listatelefonicaView->adicionaMensagem("Erro ao excluir o TeleFone");
            $this->listatelefonicaView->adicionaMensagem($this->listatelefonicaAdo->getMensagem());
        }
    }

}
