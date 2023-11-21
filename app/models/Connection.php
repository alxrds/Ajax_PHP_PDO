<?php
    
    namespace app\models;

    use PDO;

    class Connection {
        public static function connect(){
            try{$pdo = new PDO("mysql:host=localhost;dbname=ajaxphp", "root", "");
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                return $pdo;
            }catch (PDOException $e) {
                die("Error!: " . $e->getMessage() . "<br/>");
            }
        }
    }


