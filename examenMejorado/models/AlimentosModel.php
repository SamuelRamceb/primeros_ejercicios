<?php

include_once '../config/config.php';

/**
 * Clase encargada de hacer los llamados a la base de datos
 */

class AlimentosModel
{

    /**
     * Tries to connect with the database
     */
    public static function conect()
    {
        try {
            $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return 'error';
        }
    }

    

    /**
     * Closes all conections with the database
     */
    public static function disconnect()
    {
        $db = null;
    }
}
