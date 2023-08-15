<?php
require_once '../../includes/database.php';

class UsuarioController extends Database
{

    public function listar()
    {
        try {
            $conn = parent::conectar();
            $coleccion = $conn->Usuarios;
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
            $coleccion = $conn->Usuarios;
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
            $coleccion = $conn->Usuarios;
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
            $coleccion = $conn -> Usuarios;
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
            $coleccion = $conn -> Usuarios;
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
