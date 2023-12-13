<?php

class Database 
{
    private static $instance;

    private function __construct() {}
    private function __clone() {}

    public static function init($options = []) 
    {
        if (is_null(self::$instance)) 
        {
            // Assurez-vous d'inclure la classe Connection avant de l'utiliser
            require_once '../Controls/Connection.php';
            // Utilisation des constantes de la classe Connection pour les informations de connexion
            $conn = Connection::connect(); // Utilise la méthode de connexion
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance = $conn;
        }

        return self::$instance;
    }

    public static function close()
    {
      self::$instance = null;
    }
}