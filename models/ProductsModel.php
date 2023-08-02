<?php 

require_once "db/connection.php";

class ProductsModel{

    static public function getdate(){
        $qury = 'SELECT * FROM coffee_products';

        $stmt = Connection::connect()->prepare($qury);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }
    static public function  getProduct($id){
        $qury = "SELECT * FROM coffee_products where id_product ='$id'";

        $stmt = Connection::connect()->prepare($qury);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    static public function postProdcut($POST){

        $timestamp = time();
        $qury = "INSERT INTO `coffee_products`( `name_product`, `reference_product`, `Price_product`, `weight_product`, `category_product`, `stock_product`, `date_create_product`, `date_update_product`) VALUES ('$POST[name_product]','$POST[reference_product]','$POST[Price_product]','$POST[weight_product]','$POST[category_product]','$POST[stock_product]','$timestamp','$timestamp')";

        $stmt = Connection::connect()->prepare($qury);
        $stmt->execute();

        return $stmt;
    }
}