(function(){
    $(".boton_registrar").click(function() {
 
        var inputAlumno = $(".inputAlumno").val();
            inputMes = $(".inputMes").val();
			inputMonto = $(".inputMonto").val();
 
        if (inputAlumno == "") {
			alert("Debe escribir el nombre del alumno");
            $(".inputAlumno").focus();
            return false;
        }else if(inputMes == ""){
			alert("Debe asignarle el mes");
            $(".inputMes").focus();    
            return false;
		}else if(inputMonto == ""){
			alert("Debe asignarle un monto");
            $(".inputMonto").focus();    
            return false;
        }else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
				var datos = 'inputAlumno='+ inputAlumno + '&inputMes=' + inputMes + '&inputMonto=' + inputMonto;
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


