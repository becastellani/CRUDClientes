<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Desafio Formulario</title>
  </head>
  <body>



<h2>Cadastro</h2>

	<form method="POST">
		<label for="tipo_pessoa">Tipo de Pessoa:</label>
		<select name="tipo_pessoa" id="tipo_pessoa" onchange="mostrarFormulario()">
			<option value="pf">Pessoa Física</option>
			<option value="pj">Pessoa Jurídica</option>
		</select>
					<!------------------------FORMULARIO FISICA-----------------------------------> 

		<div id="form_pf">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" required>

			<label for="cpf">CPF:</label>
			<input type="text" name="cpf" id="cpf"  class="form-control"required>


            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control"><br>
    
            <label for="estado">Estado:</label>
            <input type="text" name="estado" id="estado" class="form-control"><br>

   
        <label>
            <input type="radio" name="tipo" value="Despesa">Despesa
            </label>
            <label>
            <input type="radio" name="tipo" value="Receita">Receita
        </label> <br>


    	<label class="form-label" for="logo">Escolha sua logo</label>
    	<input	type="file" name="logo" class="form-control" id="logo"><br>
  </div>
		</div>

<!------------------------FORMULARIO JURIDICA-----------------------------------> 


		<div id="form_pj" style="display:none;">
			<label for="razao_social">Razão Social:</label>
			<input type="text" name="razao_social" id="razao_social" class="form-control" required><br>

			<label for="cnpj">CNPJ:</label>
			<input type="text" name="cnpj" id="cnpj"  class="form-control" required> <br>

			<label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control"><br>

			<label for="estado">Estado:</label>
            <input type="text" name="estado" id="estado" class="form-control"><br>
			
			<label>
            <input type="radio" name="tipo" value="Despesa">Despesa
            </label>
            <label>
            <input type="radio" name="tipo" value="Receita">Receita
        	</label><br>

    		<label class="form-label" for="logo">Escolha sua logo</label>
    		<input	type="file" name="logo" class="form-control" id="logo"><br>

  		</div>
	</div>

		<input type="submit" value="Cadastrar" class="btn btn-primary">
	</form>

	
	
	
	
	
	
	<script type="text/javascript">
		function mostrarFormulario() {
			var tipo_pessoa = document.getElementById('tipo_pessoa').value;

			if (tipo_pessoa == 'pf') {
				document.getElementById('form_pf').style.display = 'block';
				document.getElementById('form_pj').style.display = 'none';
			} else if (tipo_pessoa == 'pj') {
				document.getElementById('form_pf').style.display = 'none';
				document.getElementById('form_pj').style.display = 'block';
			}
		}
	</script>

</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>