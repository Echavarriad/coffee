<?php

require_once "models/ProductsModel.php";

class ProductsController{

    static public function index(){

        $response = ProductsModel::getdate();
        echo json_encode($response);
        return $response;
        
    }

    static public function show($id){
        $response = ProductsModel::getProduct($id);
        echo json_encode($response);
        return $response;
    }

    static public function create($POST){
        $response = ProductsModel::postProdcut($POST);
        echo json_encode($response);
        return $response;
    }

    static public function update(){
        $json = array(
            'method' => $_SERVER['REQUEST_METHOD'],
            'status' => 200,
            'result' => 'Solicitud PUT'
        );

        echo json_encode($json, http_response_code($json["status"]));
    }
    static public function delete(){
        $json = array(
            'method' => $_SERVER['REQUEST_METHOD'],
            'status' => 200,
            'result' => 'Solicitud DELETE'
        );

        echo json_encode($json, http_response_code($json["status"]));
    }
}