<?php

/* criar o crud os botoes de incluir excluir e alterar e os comandos sql
 * 
 */

abstract class Ado {

    private $mensagem = null;

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function __construct() {
        $this->host = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "listatelefonica";

        if (mysql_connect($this->host, $this->usuario, $this->senha)) {
            if (mysql_select_db($this->banco)) {
                //continua
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    abstract function montaObjeto($linha);

    function leObjeto($resultado) {
        $linha = mysql_fetch_array($resultado);

        if ($linha) {
            return $this->montaObjeto($linha);
        } else {
            return false;
        }
    }

    function executaQueryConsulta($query) {
        if (($resultado = mysql_query($query))) {
            if (mysql_num_rows($resultado) > 0) {
                return $resultado;
            } else {
                return 0;
            }
        } else {
            $this->setMensagem("Erro: " . mysql_error());
            return false;
        }
    }

    function executaQuery($query) {
        if (($resultado = mysql_query($query))) {
            if (mysql_affected_rows() > 0) {
                return $resultado;
            } else {
                return 0;
            }
        } else {
            $this->setMensagem("Erro: " . mysql_error());
            return false;
        }
    }

    abstract function consultaObjeto($idConsulta);
    
    abstract function consultaArrayDeObjetos();

    function buscaObjeto($idConsulta) {
        $resultado = $this->consultaObjeto($idConsulta);

        if ($resultado) {
            return $this->leObjeto($resultado);
        } else {
            return $resultado;
        }
    }

    function buscaArrayObjeto() {
        $arrayObjeto = null;

        $resultado = $this->consultaArrayDeObjetos();

        if ($resultado) {
            //continua
        } else {
            return $resultado;
        }

        while ($objeto = $this->leObjeto($resultado)) {
            $arrayObjeto [] = $objeto;
        }

        return $arrayObjeto;
    }

    abstract function incluiObjeto(Model $objetoModel);
    
    abstract function alteraObjeto(Model $objetoModel);

    abstract function excluiObjeto(Model $objetoModel);  
        
}

?>