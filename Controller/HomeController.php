<?php

namespace Controller;
class HomeController extends Controller{
    
    public function index() {
        //echo "It`s index";
        $this->data("a", "100");
        $this->data("Something", "qwerty100");
        
        $this->display("view1");
        /* Это для подключения своих моделей
        $this->loadModel("Product");
        $products= $this->product->getAll();
        $this->data("products",$products);
         * 
         */
    }
    public function __construct() {
        parent::__construct();
        // автоматически конструкторы базового класса в рнр не вызываются
    }
}
