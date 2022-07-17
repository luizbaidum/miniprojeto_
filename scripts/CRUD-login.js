	$("#form-login").on("submit", function(event){

        event.preventDefault();

		var data = $("#form-login").serialize();
			
		$.ajax({
			type : 'POST',
			url  : 'scripts/login.php',
			data : data,
			dataType: 'json',
			beforeSend: function()
			{	
				$("#btn-login").html('Validando...');
			},
			success :  function(response){						
				if(response.codigo == "1"){	
                    $("#login-alert").css('display', 'none')
					window.location.href = "../aqui.php";
				}
				else{			
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro!</strong>');
				}
		    }
		});
	});
