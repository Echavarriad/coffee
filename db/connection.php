<?php 

class Connection{

    /**Connection ENVDB */
    static public function database(){
        $envDB = array(
            "database" => "coffee_shop",
            "user" => "root",
            "pass" => "cetin-123"
        );

        return $envDB;
    }

    /**Connection DB */

    static public function connect(){
        try{
            $connect = new PDO(
                "mysql:host=localhost;dbname=".Connection::database()["database"],
                Connection::database()["user"],
                Connection::database()["pass"]
            );
            $connect->exec("set names utf8");
        }catch(PDOException $e){
            die("Error:".$e->getMessage());
        }

        return $connect;
    }
}