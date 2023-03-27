<?php

	 $id = $_POST['codigo'];
	 $nome = $_POST['nome'];
	 $desc = $_POST['descricao'];
	 $val = $_POST['valor'];
	 $qt = $_POST['quantEstoque'];
	 $fam = $_POST['familia'];
		
		
	include("conexao.php"); 



	 $sql = "insert into item values ('$id','$nome','$desc','$val','$qt','$fam');";



	 if (mysqli_query($conn, $sql)) {
    	echo "Dados salvos com sucesso!";
    	header('Location: cadastrar.php');


	} else {
    	echo "Erro ao salvar dados: " . mysqli_error($conn);
	}

	// Fecha a conexão com o banco de dados
	mysqli_close($conn);

	

?>