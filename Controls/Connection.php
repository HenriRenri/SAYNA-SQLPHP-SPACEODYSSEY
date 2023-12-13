<?php

class Connection {
    // ... (constantes)
        public const HOST = 'localhost';
        public const DBNAME = 'Sayna';
        public const USERNAME = 'root';
        public const PASSWORD = '';
    
    public static function connect() {
        try {
            $conn = new PDO(
                "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME,
                self::USERNAME,
                self::PASSWORD,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
            return $conn;
        } catch (PDOException $e) {
            // Vous pouvez journaliser l'erreur ou la gérer de manière appropriée ici
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}
