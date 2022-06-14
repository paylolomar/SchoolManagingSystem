(function(){
    $(".btn-agregar").click(function() {
 
        var usuario = $(".txt-usuario").val();
            identidad = $(".txt-id").val();
			observaciones = $(".txt-Area").val();
 
        if (usuario == "") {
			alert("Debe ingresar el nombre del nuevo empleado");
            $(".usuario").focus();
            return false;
        }else if(identidad == ""){
			alert("Debe escribir su número de identidad");
            $(".contrasenia").focus();    
            return false;
        }else if(observaciones == ""){
			alert("Debe ingresar al menos una observación");
			$(".cantidadPago").focus();
			return false;
		}else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
				var datos = 'usuario='+ usuario + '&identidad=' + identidad + 
							'&observaciones=' + observaciones;
				$.ajax({
				    type: "POST",
				    url: "proceso.php",
				    data: datos,
				    success: function() {
				        $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);  
				    },
				    error: function() {
				        $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
				    }
				});
				return false;
        }
    });
})();