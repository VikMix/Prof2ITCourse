<?php

namespace Controller;
/*** Description of Controller @author rvm */
class Controller {
    public function __construct() {
        $this->data=[];
    }
    private $data;
    protected function data($variable, $data) {
        $this->data[$variable]=$data;
    }
    /*
    public function loadModel($title) {
        //* Это для подключения своих моделей
    }*/
    protected function display($title) {
        foreach ($this->data as $variable=> $data) {
            $$variable= $data;
        }
        include_once ($_SERVER["DOCUMENT_ROOT"] ."/View/". $title .".php");
    }

}
