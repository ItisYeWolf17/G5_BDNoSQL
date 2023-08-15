<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "../G5_BDNoSQL/vendor/autoload.php";

    class Database{

        public function conectar(){

            try{

                $bd = "CinemaniaX";
                $conn = "mongodb://localhost:27017/";
                $client = new MongoDB\Client($conn);

                return $client -> selectDatabase($bd); 
            }catch(\Throwable $th){
                return $th->getMessage();
            }
        }
    }
