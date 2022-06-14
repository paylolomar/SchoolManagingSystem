(function(){
    $(".boton_crear").click(function() {
 
        var CodSeccion = $(".CodSeccion").val();
            NomSeccion = $(".NomSeccion").val();
 
        if (CodSeccion == "") {
			alert("Debe asignarle un código a la nueva sección");
            $(".CodSeccion").focus();
            return false;
        }else if(NomSeccion == ""){
			alert("Debe asignarle un nombre a la nueva sección");
            $(".NomSeccion").focus();    
            return false;
        }else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
				var datos = 'CodSeccion='+ CodSeccion + '&NomSeccion=' + NomSeccion;
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