<?php
require_once '../../includes/database.php';

class FuncionController extends Database
{

    public function listar()
    {
        try {
            $conn = parent::conectar();
            $coleccion = $conn->Funciones;
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
            $coleccion = $conn->Funciones;
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
            $coleccion = $conn->Funciones;
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
            $coleccion = $conn -> Funciones;
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
            $coleccion = $conn -> Funciones;
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

    public function listar2D($id)
    {
        try {
            $conn = parent::conectar();
            $sala = "1";
            $coleccion = $conn->Funciones;
            $datos = $coleccion->find(
                ["pelicula" => $id, "sala" => ['$in' => ["1", "2"]]]
            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function listar3D($id)
    {
        try {
            $conn = parent::conectar();
            $sala = "3";
            $coleccion = $conn->Funciones;
            $datos = $coleccion->find(
                ["pelicula" => $id, "sala" => $sala]

            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function listar4D($id)
    {
        try {
            $conn = parent::conectar();
            $sala = "4";
            $coleccion = $conn->Funciones;
            $datos = $coleccion->find(
                ["pelicula" => $id, "sala" => $sala]
            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function listar5D($id)
    {
        try {
            $conn = parent::conectar();
            $sala = "5";
            $coleccion = $conn->Funciones;
            $datos = $coleccion->find(
                ["pelicula" => $id, "sala" => $sala]

            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}

//$objeto = new UsuarioController();
