<?php

require_once "controllers/ProductsController.php";
class Routers{
    static public function routs(){

        $routesArray = explode("/", $_SERVER['REQUEST_URI']);
        $routesArrays = array_filter($routesArray);
        $end_point = $routesArrays[1];



        if(count($routesArrays) == 0){
            $json = array(
                'status' => 400,
                'result' => 'Not found'
            );

            echo json_encode($json, http_response_code($json["status"]));
            return;
        }

        if(count($routesArrays) == 1 && isset($_SERVER['REQUEST_METHOD'])){
            /* if($_SERVER['REQUEST_METHOD'] == "GET" && $end_point == "products"){
                ProductsController::index();
            }

            if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["id"])){
                ProductsController::show($_GET["id"]);
                return;
            }else{
                $json = array(
                    'status' => 404,
                    'result' => 'Not found'
                );

                echo json_encode($json, http_response_code($json["status"]));
                return;
            } */

            if($_SERVER['REQUEST_METHOD'] == "POST" && $end_point =="create" && isset($_POST)){
                ProductsController::create($_POST);
            }else{
                $json = array(
                    'status' => 404,
                    'result' => 'Not found'
                );

                echo json_encode($json, http_response_code($json["status"]));
                echo $_SERVER['REQUEST_METHOD'];
                return;
            }

            if($_SERVER['REQUEST_METHOD'] == "PUT"){
                ProductsController::update();            }

            if($_SERVER['REQUEST_METHOD'] == "DELETE"){
                ProductsController::delete();            }
        }else{
            $json = array(
                    'method' => $_SERVER['REQUEST_METHOD'],
                    'status' => 404,
                    'result' => 'request'.$_SERVER['REQUEST_METHOD'].'does not exist '
                );

        }
    }
   

}

