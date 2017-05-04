<?php

require_once 'view.class.php';

class index extends View {

    public function getObjetoModel() {
        
    }

    public function montaDados(\Model $objetoModel) {
        
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

