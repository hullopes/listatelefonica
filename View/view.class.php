<?php

abstract class View {

    private $mensagem = null;
    protected $html1 = null;
    protected $html2 = null;
    protected $form = null;

    function __construct() {
        $this->montaHtml1();
        $this->montaHtml2();
    }

    public function getAcao() {
        if (isset($_POST['bt'])) {
            return $_POST['bt'];
        } else {
            return 'nov';
        }
    }

    private function montaHtml1() {
        $this->html1 = "
            <HTML>
            <head>
          <TITLE>Lista Telefonica</TITLE>
             </HEAD>
            <body style='background:#B5B5B5'>";
    }

    private function montaHtml2() {
        $this->html2 = "
             <div align='center' class='credit'>
                  <a href='#'><br />Fomulario</a> 
                  � Copyright 2015. Todos os direitos reservados. Desenvolvidores: 
                  <span style='color:#ff2400;'> Jo&atilde;o Marcos De Oliveira Santos</span>
                  <span style='font-size: 100%; text-align: left;'>.</span>
              </div>
            </BODY>
            </BODY>
          </HTML>";
    }

    public function displayHtml($objetoModel) {
        $this->montaDados($objetoModel);
        echo $this->html1 . $this->form . $this->html2;
    }

    abstract public function montaDados(Model $objetoModel);

    public function adicionaMensagem($mensagem) {
        $this->mensagem .= "<p>" . $mensagem . "</p>";
    }

    public function getIdConsulta() {
        return $_POST ['idConsulta'];
    }

    abstract public function getObjetoModel();

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

}

?>