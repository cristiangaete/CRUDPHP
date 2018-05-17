<?php



include ("./ClaseFunciones.php");

$id_gasto = $_POST['borrar'];


$clasefunciones = new ClaseFunciones();

$montoborrado = $clasefunciones->borrar($id_gasto);
$nfilas = ($montoborrado);

if($nfilas > 0 )
    {
    
    if($montoborrado > 0){
        print "Registro fue borrado con exito";
        header("Refresh:3; url=inicio.php");
    }else
        {
        print "Error al borrar";
        header("Refresh:3; url=inicio.php");
        }
    
    }