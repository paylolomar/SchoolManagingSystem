(function(){
    $(".boton_crear").click(function() {
 
        var codigoCurso = $(".codigoCurso").val();
            nombreCurso = $(".nombreCurso").val();
 
        if (codigoCurso == "") {
			alert("Debe asignarle un código al nuevo curso");
            $(".codigoCurso").focus();
            return false;
        }else if(nombreCurso == ""){
			alert("Debe asignarle un nombre al nuevo curso");
            $(".nombreCurso").focus();    
            return false;
        }else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
				var datos = 'codigoCurso='+ codigoCurso + '&nombreCurso=' + nombreCurso;
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