<?php
class Tigger {

private static $instance = null;
private static $contador = 0;

private function __construct() {
        echo "La nueva instancia de Tigre se está realizando...".PHP_EOL;
}

public static function getInstance() {
    if (!isset(self::$instance)) {
        self::$instance = new Tigger();
    }
    return self::$instance;
}

public function roar() {
        echo "Grrr!! ".PHP_EOL;
        self::$contador++;
}

public static function getCounter() {
   echo "Ha rugido " . self::$contador . " veces".PHP_EOL;
}

}

?>