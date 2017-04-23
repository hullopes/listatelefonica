<?php

require_once 'view.class.php';


class ListaTeleFonicaView extends View {

    public function montaDados(\Model $listaTelefonicaModel) {
        $this->form = null;

        $listaId     = $listaTelefonicaModel->getListaId();
        $listaNome   = $listaTelefonicaModel->getListaNome();
        $listaNumero = $listaTelefonicaModel->getListaNumero();

        $this->form .= parent::getMensagem();

        $listaTelefonicaAdo   = new ListatelefonicaAdo();
        $listaTelefonicasModel = $listaTelefonicaAdo->buscaArrayObjeto();
        if ($listaTelefonicasModel) {
            // continua
        } else {
            $listaTelefonicasModel = null;
        }
        
        $options = null;
        foreach ($listaTelefonicasModel as $listaTelefonicaModel) {
            $options .= "<option value='{$listaTelefonicaModel->getListaId()}'>{$listaTelefonicaModel->getListaNome()}</option>\n";
        }
        
         $this->form .= "
            <center><h1>LISTA TELEFONICA</h1></center>
            \n<center><form action=\"listatelefonica.php\" method=\"post\">
            <select name='idConsulta'>
                <option value='-1'>Escolha uma op&ccedil;&atilde;o</option>
                {$options}
            </select>
            <button type=\"submit\" name=\"bt\" value=\"con\">Consultar</button>
            <br><br>
            <input type='hidden' name='usuId' value='{$listaId}' />
            Nome:
            <input type=\"text\" name=\"listaNome\" placeholder=\"Digite o seu Nome\" value=\"{$listaNome}\">
            <br>
            </br>
            Numero de Telefone:
            <input type=\"text\" name=\"listaNumero\" placeholder=\"Digite o seu Numero\" value=\"{$listaNumero}\">
            <br>
            </br>
            
            <button type=\"submit\" name=\"bt\" value=\"inc\">Salvar</button>
            <button type=\"submit\" name=\"bt\" value=\"alt\">Alterar</button>
            <button type=\"submit\" name=\"bt\" value=\"exc\">Excluir</button>
        </from></center>";
        
    }

    public function getObjetoModel() {
        $listaId     = $_POST['lista_id'];
        $listaNome   = $_POST['lista_nome'];
        $listaNumero = $_POST['lista_numero'];

        return new ListaTelefonicaModel($listaId, $listaNome, $listaNumero);
    }

}
