<?php

include ("./ClaseFunciones.php");

$item = $_POST['item'];
$monto = $_POST['monto'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];


$clasefunciones = new ClaseFunciones();

$mostoinsertado = $clasefunciones->inserta($monto, $item, $descripcion, $fecha);


if($mostoinsertado )
    {
    print "Registro insertado con exito";
    header("Refresh:3; url=inicio.php");
    }
    else
        {
        print "Error al registrar";
        header("Refresh:3; url=inicio.php");
        }