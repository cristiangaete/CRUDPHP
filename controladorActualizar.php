<?php

include './ClaseFunciones.php';

$id_gasto = $_POST['act'];
$varmonto = $_POST['varmonto'];
$varfecha = $_POST['varfecha'];
$vardescripcion = $_POST['vardescripcion'];



$clasefunciones = new ClaseFunciones();

$nuevoscambios = $clasefunciones->actualizar($id_gasto, $varmonto, $varfecha, $vardescripcion );

if($nuevoscambios > 0)
    {
    print "Registro actualizado con exito";
    header("Refresh:1; url=inicio.php");
    }else
        {
        print "Error al actualizar.";
        header("Refresh:1; url=inicio.php");
        }
