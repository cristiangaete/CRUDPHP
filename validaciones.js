function valida()
{
    var item = document.getElementById('sl2').selectedIndex;
    var monto = document.getElementById("num1").value;
    var descripcion = document.getElementById("text1").value;
    var fecha = document.getElementById("date1").value;
    var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    
    
   if(item.length==0 || item == null || item == 0){
        
        alert('Seleccione un item ');
        return false;
    } else if( monto.length==0 || monto == null || monto == 0)
    { alert('Ingrese un monto');
        return false;
}
else if( descripcion.length==0 || descripcion == null || descripcion == 0)
    { alert('Ingrese una descripcion');
        return false;
}
else if ((fecha.match(RegExPattern)) || (fecha!='')) {
            return true;
      } else {
          alert ('Seleccione una fecha')
            return false;
      }
}