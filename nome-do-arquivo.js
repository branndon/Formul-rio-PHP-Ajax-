				$.post( "nome-do-arquivo.php", {

						natureza:	val_natureza,

					}, function( data ) {
						var result = data;

						// Verifica se a página em PHP retornou "success"
						if (result == "success") {
							$(".alert-success").slideDown(500);
							$("form#contato").find("input[type=text], textarea").val("");
							$("form#contato").find("select").val("Selecione");
						} else {
							$(".alert-danger").slideDown(500);
						} 
					}
				);