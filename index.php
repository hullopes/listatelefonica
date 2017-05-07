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
      
     $table =   "      <legend><strong> categoria ></strong></legend>
                     if(lista.size()>0) {    
                        <table align='center' border='1px' width='90%'>
                        <tr>  
                            <th>Nome</th>
                            <th>Numero</th>
                 
                            
                         </tr>
                         <%                                                                                                            
                            for(Produto p: lista ){
                                int idProduto = p.getPRO_ID();               
                        
                        <tr>
                            <th>$empresaNome</th>
                            <th></th>
        </table>";
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

