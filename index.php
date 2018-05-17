<html>
    <head>
        <script type="text/javascript" src="validaciones.js"></script>
        
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" name="form1" action="controladorinsertar.php" onsubmit="return valida ()">
            <label> Item
            <select id="sl2" name="item" >
                <option value="0">Seleccione Item </option>
                <?php
                include ("ClaseConecta.php");
                $link = ClaseConecta::conecta();
                $query = "select * from tbl_item";
                $gastos = mysqli_query($link, $query);
                foreach ($gastos as $value){
                    print '<option value='.$value['cod_item'].'>'.$value['nom_item'].'</option>';
                }
                
                ?>
                
            </select></label><br>
            
            <label id="lb1">Ingrese Monto de gasto<input type="number" name="monto" id="num1" min="0" max="1000000"></label><br>
            <textarea rows="3" cols="20" maxlength="100" name="descripcion" id="text1" placeholder="Ingrese descripcion" ></textarea><br>
            <label>Ingrese fecha de gasto</label>
            <input type="date" name="fecha" id="date1"><br>
            
            <input type="submit" value="Registar">
          </form>
    </body>
</html>
