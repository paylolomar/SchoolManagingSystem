(function(){
    $(".boton_guardar").click(function() {
 
        var alergias = $(".alergias").val();
            enferPadece = $(".enferPadece").val();
            tipoSangre = $(".tipoSangre ").val();
            mediTomas = $(".mediTomas").val();
            mediIngerir = $(".mediIngerir").val();
 
        if (alergias == "") {
			alert("Debe ingresar si si padece de alguna alergia");
            $(".alergias").focus();
            return false;
        }else if(enferPadece == ""){
			alert("Debe ingresar si padece de alguna enfermedad");
            $(".enferPadece").focus();    
            return false;
        }else if(tipoSangre == ""){
			alert("Debe ingresar el tipo de sangre");
            $(".tipoSangre").focus();    
            return false;
        }else if(mediTomas == ""){
			alert("Debe ingresar los medicamentos que toma");
            $(".mediTomas").focus();    
            return false;
        }else if(mediIngerir == ""){
			alert("Debe ingresar los medicamentos que no debe de ingerir");
            $(".mediIngerir").focus();    
            return false;
        }else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
			    var datos = 'alergias='+ alergias + 
			                 '&enferPadece=' + enferPadece + 
			                 '&tipoSangre=' + tipoSangre +  
				             '&mediTomas=' + mediTomas+ 
				             '&mediIngerir=' + mediIngerir;
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