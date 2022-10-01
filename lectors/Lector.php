<?php
include_once('../config/config.php');
include('../config/Database.php');

class Lector{
    public $conn;

    function __construct()
    {
        $db = new Database();
        $this->conn=$db->connectToDatabase();
    }

    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $profesion = $params['profesion'];
        $interes = $params['interes'];
    
        $insert = "INSERT INTO lectores VALUES (NULL, '$nombres', ' $apellidos', '$email', '$celular', '$profesion', '$interes')";
        return mysqli_query($this->conn, $insert);
    }
        function getAll(){
            $sql = "SELECT * FROM lectores";
            return mysqli_query($this->conn, $sql); 
        }
    
        function getOne($id){
            $sql = "SELECT * FROM lectores WHERE id =$id";
            return mysqli_query($this->conn, $sql);
        }
    

    function update($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $profesion = $params['profesion'];
        $interes = $params['interes'];
        $id = $params['id'];
    
        $update = "UPDATE lectores SET nombres='$nombres', apellidos='$apellidos', email='$email', celular='$celular', profesion='$profesion', interes='$interes' WHERE id=$id";
        return mysqli_query($this->conn, $update);
    }
        function remove($id){
            $remove = "DELETE FROM lectores WHERE id = $id";
            return mysqli_query($this->conn, $remove); 
        }


    }
?>