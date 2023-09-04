<?php

class Connection {
    const DB_HOST = "localhost";
    const DB_NAME = "KuroMart";
    const DB_USER = "qrozyer";
    const DB_PASSWORD = "qrozyer111";

    function __construct(){
        try{
            $this->pdo = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME."",self::DB_USER,self::DB_PASSWORD);        
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }      
}