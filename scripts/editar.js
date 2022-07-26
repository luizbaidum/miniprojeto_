$("#form-edit").on("submit", function(event){

    event.preventDefault();

    var data = $("#form-edit").serialize();
		
	$.ajax({
		type : 'POST',
		url  : 'scripts/editar.php',
		data : data,
		dataType: 'json',
		success :  function(response){
            if(response.codigo == 1) {

                window.location.href = "usuarios.php";
            } else {

                $('#erro').html(response.mensagem);
            }						
		}
	});
});