<?php
// Faire en singleton
class Database
{
    static private $connexion = null;
    public static function connect()
    {
        // Si aucune connexion n'existe on en crée
        if (is_null(self::$connexion)) {
            self::$connexion = new PDO('mysql:host=localhost;dbname=homeiot', 'julien', 'mysqlpassword');
        }
        // Sinon on retourne l'instance existante
        return self::$connexion;
    }
}
?>