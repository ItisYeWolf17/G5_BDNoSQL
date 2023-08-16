<?php
require_once '../../includes/database.php';

class PeliculaController extends Database
{

    public function listar()
    {
        try {
            $conn = parent::conectar();
            $coleccion = $conn->Peliculas;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function insertarDatos($datos)
    {
        try {
            $conn = Database::conectar();
            $coleccion = $conn->Peliculas;
            $resultado = $coleccion->insertOne($datos);
            return $resultado;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function update($id, $usuario)
    {
        try {
            $conn = Database::conectar();
            $coleccion = $conn->Peliculas;
            $resultado = $coleccion->updateOne(
                ['_id' => $id],
                [
                    '$set' => $usuario
                ]
            );
            return $resultado;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function search($id){
        try {
            $conn = Database::conectar();
            $coleccion = $conn -> Peliculas;
            $resultado = $coleccion->findOne(
                array(
                    '_id' => $id
                )
            );
            return $resultado;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function delete($id){
        try {
            $conn = Database::conectar();
            $coleccion = $conn -> Peliculas;
            $resultado = $coleccion->deleteOne(
                array(
                    '_id' => $id
                )
            );
            return $resultado;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function listarCartelera(){
        try {
            $prox = "0";
            $conn = parent::conectar();
            $coleccion = $conn->Peliculas;
            $datos = $coleccion->find(
                ["prox" => $prox]
            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

        public function listarProx(){
        try {
            $prox = "1";
            $conn = parent::conectar();
            $coleccion = $conn->Peliculas;
            $datos = $coleccion->find(
                ["prox" => $prox]
            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}

//$objeto = new UsuarioController();
