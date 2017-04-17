<?php
require_once 'model.class.php';

class NumeroModel extends Model{

    private $telifone1 = null;
    private $telifone2 = null;
    private $telifone3 = null;

    function __construct($telifone1 = null, $telifone2 = null, $telifone3 = null) {
        $this->telifone1 = $telifone1;
        $this->telifone2 = $telifone2;
        $this->telifone3 = $telifone3;
    }

    function getTelifone1() {
        return $this->telifone1;
    }

    function getTelifone2() {
        return $this->telifone2;
    }

    function getTelifone3() {
        return $this->telifone3;
    }

    function setTelifone1($telifone1) {
        $this->telifone1 = $telifone1;
    }

    function setTelifone2($telifone2) {
        $this->telifone2 = $telifone2;
    }

    function setTelifone3($telifone3) {
        $this->telifone3 = $telifone3;
    }


}
?>