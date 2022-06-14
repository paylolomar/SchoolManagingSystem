(function(){
    $(".boton_guardar").click(function() {
 
        var nomEstudiante = $(".nomEstudiante").val();
            nomEncargado= $(".nomEncargado").val();
            constancia= $(".constancia").val();
            instTraslada= $(".instTraslada").val();
            fecha= $(".fecha").val();

        if (nomEstudiante == "") {
			alert("Debe ingresar el nombre del estudiante");
            $(".nomEstudiante").focus();
            return false;
        }else if(nomEncargado == ""){
			alert("Debe ingresar el nombre del encargado");
            $(".nomEncargado").focus();    
            return false;
        }else if(constancia == ""){
			alert("Debe ingresar la constancia de conducta");
            $(".constancia").focus();    
            return false;
        }else if(instTraslada == ""){
			alert("Debe ingresar el instituto donde se traslada");
            $(".instTraslada").focus();    
            return false;
        }else if(fecha == ""){
			alert("Debe ingresar la fecha");
            $(".fecha").focus();    
            return false;


        }else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
			    var datos = 'nomEstudiante='+ nomEstudiante + 
				             '&nomEncargado=' + nomEncargado + 
				             '&constancia=' + constancia + 
				             '&instTraslada=' + instTraslada+ 
				             '&fecha=' + fecha;
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