<?php
require_once '../../includes/database.php';

class SalaController extends Database
{

    public function listar()
    {
        try {
            $conn = parent::conectar();
            $coleccion = $conn->Salas;
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
            $coleccion = $conn->Salas;
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
            $coleccion = $conn->Salas;
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
            $coleccion = $conn -> Salas;
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
            $coleccion = $conn -> Salas;
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
}

//$objeto = new UsuarioController();
