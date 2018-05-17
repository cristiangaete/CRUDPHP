<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         include './ClaseFunciones.php';
        $clasefunciones = new ClaseFunciones();
        
        $id_gasto = $_POST['act'];
        $arreglo = $clasefunciones->buscar2($id_gasto);
        foreach ($arreglo as $value) { 
     ?>
        <form method="POST" name="form1" action="controladorActualizar.php">
            <label id="lb1">Ingrese nuevo Monto de gasto<input type="number" name="varmonto" value='<?php print $value['monto']?>' min="0" max="1000000"></label><br>
            <textarea rows="3" cols="20" maxlength="100" name="vardescripcion" value='<?php print ['descripcion']?>' placeholder="Ingrese nueva descripcion" ></textarea>
            <label>Ingrese nueva  fecha de gasto</label>
            <input type="date" name="varfecha" value='<?php print $value['fecha']?>'><br>
           
            
            
            <button type="submit" name="act" value='<?php print $value['id_gasto']?>'>Actualizar</button>
        </form>
    
        
        <?php
        }
        ?>
    </body>
</html>
