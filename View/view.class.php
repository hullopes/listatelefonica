<?php

abstract class View {

    private $mensagem = null;
    protected $html1  = null;
    protected $html2  = null;
    protected $form   = null;

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
            </head>
            <body style='background:#B5B5B5'>";
    }

    private function montaHtml2() {
        $this->html2 = "
             <div align='center' class='credit'>
                  <a href='#'><br />Lista Telefonica</a> 
                   Copyright 2017. Todos os direitos reservados. Desenvolvidores: 
                  <span style='color:#ff2400;'> Jo&atilde;o Marcos De Oliveira Santos</span>
                  <span style='font-size: 100%; text-align: left;'>.</span>
              </div>
            
       <script>
             (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                         ga('create', 'UA-98311274-1', 'auto');
                         ga('send', 'pageview');

       </script>

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
    
    public function getLetraInicial() {
        return $_POST ['letraInicial'];
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