    function validafechas ()
    {
    
    var fecha = document.getElementById("date2").value;
    var RegExPattern1 = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    var fecha2 = document.getElementById("date3").value;
    var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    
    
if ((fecha.match(RegExPattern1)) || (fecha!='' && fecha2.match(RegExPattern)) || (fecha2!='')) {
            return true;
      } else {
          alert ('Seleccione fechas "desde" y "hasta"')
            return false;
      
        }
        }