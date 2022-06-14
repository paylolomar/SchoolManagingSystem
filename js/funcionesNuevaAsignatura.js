(function(){
    $(".boton_crear").click(function() {
 
        var CodAsignatura = $(".CodAsignatura").val();
            NomAsignatura = $(".NomAsignatura").val();
 
        if (CodAsignatura == "") {
			alert("Debe asignarle un codigo a la nueva asignatura.");
            $(".CodAsignatura").focus();
            return false;
        }else if(NomAsignatura == ""){
			alert("Debe asignarle un nombre a la nueva asignatura.");
            $(".NomAsignatura").focus();    
            return false;
        }else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
				var datos = 'CodAsignatura='+ CodAsignatura + '&NomAsignatura=' + NomAsignatura;
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