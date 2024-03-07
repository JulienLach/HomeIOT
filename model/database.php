<?php
// Faire en singleton : Database::connect() en singleton elle ne peut pas être instanciée
// la méthode connect() est static et s'appelle directement sur la classe avec les "::"
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