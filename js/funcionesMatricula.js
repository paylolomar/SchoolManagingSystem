(function(){
    $(".boton_guardar").click(function() {
 
        var nombre = $(".nombre").val();
            numeroId= $(".numeroId").val();
            fechaNac= $(".fechaNac").val();
            direccion= $(".direccion").val();
            edad= $(".edad").val();
            correoElec= $(".correoElec").val();
            tel= $(".tel").val();

	    if (nombre == "") {
			alert("Debe ingresar el nombre del estudiante");
            $(".nombre").focus();
            return false;
        }else if(numeroId == ""){
			alert("Debe ingresar el numero de identidad");
            $(".numeroId").focus();    
            return false;
        }else if(fechaNac == ""){
			alert("Debe ingresar la fecha de nacimiento");
            $(".fechaNac").focus();    
            return false;
        }else if(direccion == ""){
			alert("Debe ingresar la direccion");
            $(".direccion").focus();    
            return false;
        }else if(edad == ""){
			alert("Debe ingresar la edad");
            $(".edad").focus();    
            return false;
        }else if(correoElec == ""){
			alert("Debe ingresar el correo electronico");
            $(".correoElec").focus();    
            return false;
        }else if(tel == ""){
			alert("Debe ingresar el telefono");
            $(".tel").focus();    
            return false;
        }else{

               // Si todo paso, aqui ira la llamada AJAX
           $('.ajaxgif').removeClass('hide');
				$('.ajaxgif').removeClass('hide');
				var datos = 'nombre='+ nombre + 
				             '&numeroId=' + numeroId+ 
				             '&fechaNac=' + fechaNac +  
				             '&direccion=' + direccion+ 
				             '&edad=' + edad+
				             '&correoElec=' + correoElec+
				             '&tel=' + tel;
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