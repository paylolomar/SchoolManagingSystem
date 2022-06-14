(function(){
    $(".boton_guardar").click(function() {

	    var nombreCompleto = $(".nombreCompleto").val();
            numIdentidad= $(".numIdentidad").val();
            numCel= $(".numCel").val();
            direccion= $(".direccion").val();
            ocupacion= $(".ocupacion").val();
            lugarTrabajo= $(".lugarTrabajo").val();
 

        if (nombreCompleto == "") {
			alert("Debe ingresar el nombre del encargado");
            $(".nombreCompleto").focus();
            return false;
        }else if(numIdentidad == ""){
			alert("Debe ingresar el numero de identidad");
            $(".numIdentidad").focus();    
            return false;
        }else if (numCel == "") {
			alert("Debe ingresar su numero de celular");
            $(".numCel").focus();
            return false;
        }else if(direccion == ""){
			alert("Debe ingresar la direccion");
            $(".direccion").focus();    
            return false;
        }else if(ocupacion == ""){
			alert("Debe ingresar su ocupacion");
            $(".ocupacion").focus();    
            return false;
        }else if(lugarTrabajo == ""){
			alert("Debe ingresar el lugar de trabajo");
            $(".lugarTrabajo").focus();    
            return false;
        }else{
                
                // Si todo paso, aqui ira la llamada AJAX
           $('.ajaxgif').removeClass('hide');
				$('.ajaxgif').removeClass('hide');
				var datos = 'nombreCompleto='+ nombreCompleto + 
				             '&numIdentidad=' + numIdentidad + 
				             '&numCel=' + numCel +  
				             '&direccion=' + direccion+ 
				             '&ocupacion=' + ocupacion+
				             '&lugarTrabajo=' + lugarTrabajo;
				$.ajax({
				    type: "POST",
				    url: "proceso.php",
				    data: datos,
				    success: function() {
				        $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);  
				    },
				    error: function() {
				        $('.msg').text('Mensaje NO enviado!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
				    }
				});
				return false;
        }
    });
})();