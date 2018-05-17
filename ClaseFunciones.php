<?php

include ("./ClaseConecta.php");

class ClaseFunciones {
   
    
            
    
    public function inserta($monto, $cod_item, $descripcion, $fecha) // parametros de la funcion.
            {
    $query = "insert into tbl_usuario values ('null', '$monto', '$cod_item','$descripcion', '$fecha')";
    $link = ClaseConecta::conecta(); 

        mysqli_query($link, $query);
        
        $nfilas = mysqli_affected_rows($link);
        
        if ($nfilas==1)
            {
               return true;
            }else{
                return false;
            }
        mysqli_close($link);       
    }
         public function buscar($fecha,$fecha2, $cod_item )
                 {
             if($cod_item == 0){
                 $query = "SELECT * from tbl_usuario u, tbl_item i "
                     ."where u.fecha between '$fecha' and '$fecha2' and u.cod_item = i.cod_item";
             
             $link = ClaseConecta::conecta();
             $result = mysqli_query($link, $query);
             return $result;
             mysqli_close($link);
             
             
                 }else{
                 $query = "SELECT * from tbl_usuario u, tbl_item i "
                     ."where u.fecha between '$fecha' and '$fecha2' and u.cod_item = $cod_item and i.cod_item = $cod_item";
                 $link = ClaseConecta::conecta();
             $result = mysqli_query($link, $query);
             return $result;
             mysqli_close($link);
                 }
                     
                 }
                     
                 
        public function actualizar($id_gasto, $varmonto, $varfecha, $vardescripcion )
                {
            $query = " update tbl_usuario set  monto = '$varmonto', descripcion = '$vardescripcion', fecha = '$varfecha' where id_gasto = '$id_gasto'";
            $link = ClaseConecta::conecta();
            mysqli_query($link, $query);
            $nfilas = mysqli_affected_rows($link);
            return $nfilas;
            mysqli_close($link);
                
                }
         
                public function borrar($id_gasto)
                        {
                    $query = "delete  from tbl_usuario where id_gasto = '$id_gasto'";
                    $link = ClaseConecta::conecta();
                    mysqli_query($link, $query);
                    $nfilas = mysqli_affected_rows($link);
                    return $nfilas;
                    mysqli_close($link);
                        }
                         
                     
       public function buscar2($id_gasto)
                 {
             $query = "select * from tbl_usuario where id_gasto = '$id_gasto'";
             $link = ClaseConecta::conecta();
             $result = mysqli_query($link, $query);
             return $result;
             mysqli_close($link);
                 }                  
    
    }