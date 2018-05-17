<html>
    <head>
        <script type="text/javascript" src="validafechas.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="form3" method="POST" action="controladorBuscar.php" onsubmit="return validafechas()">
            <label id="lb1">Buscar por fecha desde  <input type="date" name="fecha" id="date2"></label>
            <label> Buscar por fecha hasta <input type="date" name="fecha2" id="date3"></label><br>
            <select id="sl2" name="item">
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
                
            </select><br>
            <input type="submit" value="buscar">
        </form>
    </body>
</html>