<?php

class dbConnect {
    function __construct()
    {
        try {
            require_once('./config/config.php');
            $conn = new PDO('mysql:host='. DB_HOST . ';dbname='. DB_DATABASE . '', DB_USER , DB_PASSWORD);
            foreach($conn->query('SELECT * FROM users') as $row){
                print_r($row);
            }
            $conn = null;
        } catch (PDOException $e) {
            print 'Error!:' . $e->getMessage() . '<br/>';
            die();
        }
    }
}

function prepareQuery($query) 
{

}

$test = new dbConnect();