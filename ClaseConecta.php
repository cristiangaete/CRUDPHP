<?php

class ClaseConecta {
    
    public function conecta(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $bd = "sl3";
        
        try{
          
            $conexion = mysqli_connect($server, $user, $pass, $bd);
            return $conexion;
        }
    catch (mysqli_sql_exception $error)
        {
                print $error->getMessage();
                exit();
        }
    }
}