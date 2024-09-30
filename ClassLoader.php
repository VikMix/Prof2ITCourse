<?php

class ClassLoader {

    private static $instance;


    /* public static function load($className) {
      echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n";

      echo "$className";
      echo "this";
      include $className . '.php';

      } */

    public function load($className) {
        //echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n";
        //echo "$className"."<br>";
        //echo "this";
        include_once ($_SERVER["DOCUMENT_ROOT"] . "/".str_replace("\\", "/", $className).".php");
    }

    public function __construct() {
        //spl_autoload_register(array($this, "load"));
    }

    ///*
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new ClassLoader();
        }
        //echo "this";
        spl_autoload_register([self::$instance, "load"]);
    }
}

    
