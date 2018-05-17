<?php

include 'ClaseFunciones.php';

$fecha = $_POST['fecha'];
$fecha2 = $_POST['fecha2'];
$cod_item = $_POST['item'];




$clasefunciones = new ClaseFunciones();

$arreglo = $clasefunciones ->buscar($fecha, $fecha2, $cod_item);

if(mysqli_num_rows($arreglo)> 0){

        foreach ($arreglo as $value){
            do{
            
            print "Monto: " .$value['monto']."<br>";
            print "Descripcion: " .$value['descripcion']."<br>";
            print "Gasto: ".$value['nom_item']."<br>";
            print "id gasto: ".$value['id_gasto']."<br>";
            print "fecha: ".$value['fecha'];
            
            echo '<form name="borrar" method="POST" action="controladorBorrar.php" >';
            print '<button type="submit"  name="borrar"  value='.$value['id_gasto'].'>Borrar</button></form>';
            echo '<form name="actualizar" method="POST" action="formActualizar.php" >';
             print '<button type="submit" name="act" value='.$value['id_gasto'].'">Actuaizar</button></form>';
    }while ($value = mysqli_fetch_array($arreglo));}//recupera como resultado un array asociatiivo
             
            }  else {
                print "no hay coincidencias";
                print $cod_item;
}

