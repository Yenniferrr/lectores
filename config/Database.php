<?php
class Database
{
    public $host = 'localhost'; // Servidor
    public $user = 'root'; // Usuario de phpMyadmin
    public $pass = ''; // Contraseña de phpMyadmin
    public $db = 'sesiones'; //Base de datos.
    public $conn;

    /**
     * Metodo constructor, este metodo sera el primero que se ejecute al momento de llamar la clase database.
     */
    function __construct()
    {
        $this->conn = $this->connectToDatabase(); //Hacemos un llamado a la funcion connectToDatabase()
        return $this->conn; // retornamos la conexion.
    }


/**
 * Funcion que permitira conectarnos a nuestra base de datos.
 * @return $conn -> Conexion a la db.   
 */

    //Utilizamos el mysql para interactuar con nuestra base de datos
    //Con el metodo mysqli_connect() vamos a generar conexion con la base de datos


 function connectToDatabase(){
    $conn= mysqli_connect($this->host, $this->user, $this->pass, $this->db);

    if(mysqli_connect_error()){ /* Si hay un error que me lo muestre */
        echo "Tenemos un error de conexion " . mysqli_connect_error();
    }
    return $conn; /* Me activa la conexion */
}



}


















?>