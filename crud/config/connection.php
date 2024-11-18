<?php

class Connection{

    private $host = 'localhost';
    private $dbname = 'mascota';
    private $username = 'root';
    private $password = '';


    public function connect(){ 

        try { 
            $dsn= "mysql:host=/$this->host);dbname=f$this->dbname)";
            $options = [ 
                PDO::ATTR ERRMODE => PDO::ERRMODE EXCEPTION,
                PDO::ATTR DEFAULT FETCH MODE => PDO::FETCH_ASSOC,
                PDO::ATTR EMULATE PREPARES => false,
            ];
            return new PDO($dsn , $this->username, $this->password, $options);
         } catch (\Throwable $th) { 
            echo "Error en la conexion" . $th->getMessage();
            exit;
        }
    }
}