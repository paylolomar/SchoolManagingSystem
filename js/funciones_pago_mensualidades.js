(function(){
    $(".btn-realizar-pago").click(function() {
 
        var usuario = $(".txt-usuario").val();
            contrasenia = $(".txt-contrasenia").val();
			cantidadPago = $(".txt-cantidadPago").val();
 
        if (usuario == "") {
			alert("Debe ingresar el código de usuario");
            $(".usuario").focus();
            return false;
        }else if(contrasenia == ""){
			alert("Debe escribir su contraseña");
            $(".contrasenia").focus();    
            return false;
        }else if(cantidadPago == ""){
			alert("Debe ingresar la cantidad del pago");
			$(".cantidadPago").focus();
			return false;
		}else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
				var datos = 'usuario='+ usuario + '&contrasenia=' + contrasenia + 
							'&cantidadPago=' + cantidadPago;
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