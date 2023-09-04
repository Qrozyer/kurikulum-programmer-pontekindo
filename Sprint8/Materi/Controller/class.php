<?php
namespace Data {

    use PDO;
    const AUTHOR = "qrozyer";

    function sayHi(){
        echo "Hi My name is " . AUTHOR;
    }

    class Laptop {
        const DB_HOST = "localhost";
        const DB_NAME = "KuroMart";   
        const DB_USER = "root";
        const DB_PASSWORD = "";

        var $pdo;
    
        function __construct(){
            try{
                $this->pdo = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME."",self::DB_USER,self::DB_PASSWORD);        
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }      
    }
    
    class Produk extends Laptop {
        function index(){
            $index = "SELECT * FROM product_detail";
            $statement = $this->pdo->query($index);
            $products = $statement->fetchAll(PDO::FETCH_OBJ);
            return $products;
        }
    }
}