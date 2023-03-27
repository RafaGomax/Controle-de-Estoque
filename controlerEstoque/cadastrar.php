<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Items</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
	integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		
		body{
			background-color: black;
			color: white;

		}

		.inp{
			width: 30px;
		}

		.titulo{
			text-align: center;
		}
	</style>

</head>
<body>
	<?php

	function gerar_codigo() {
    $codigo = '';
    $caracteres = '0123456789';
    $tamanho = 6;
    
    for ($i = 0; $i < $tamanho; $i++) {
        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    
    return $codigo;
	}

		$codigo_gerado = gerar_codigo();
			
	?>



		
	<form action="scItem.php" method="POST" >
		<div class="mb-3">
			<h1 class="titulo">Cadastro de Itens</h1>

			<input type="hidden" name="codigo" value="<?php echo $codigo_gerado;?>">


  			<label for="exampleFormControlInput1" class="form-label" class="inp">Nome:</label>
 			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do item" name="nome"><br>

  			<label for="exampleFormControlInput1" class="form-label" class="inp">Descrição</label>
  			<input type = "text" class="form-control" id="exampleFormControlInput1" placeholder="Descrição detalhada do item" name="descricao"><br>

   			<label for="exampleFormControlInput1" class="form-label" class="inp">Valor</label>
 			<input type="number" step="0.01" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Custo médio do produto" name="valor" ><br>

 			<label for="exampleFormControlInput1" class="form-label" class="inp">Estoque inicial:</label>
 			<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Quantidade para iniciar o estoque" name="quantEstoque"><br>

 			<label for="exampleFormControlInput1" class="form-label" class="inp">Família:</label>
 			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Família do item" name="familia"><br>


 			

 			<input type="submit" name="enviar">

 	</form>
 			<br>





		</div>
	</form>
</body>
</html>