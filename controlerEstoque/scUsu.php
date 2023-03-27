<?php

	 $nome = $_POST['nome'];
	 $tipo = $_POST['tipo'];
	 $email = $_POST['email'];
	 $senha = md5($_POST['senha']);

	 

		
	



	 $sql = "insert into usuario values (null,'$nome','$tipo','$email','$senha');";

	 include("conexao.php"); 



	 if (mysqli_query($conn, $sql)) {
   
    	 
    	echo "<script>window.confirm('Usuario cadastrado com sucesso !');</script>";  
    	echo "<script>window.location.replace('usua1.php');</script>";   

    	


	} else {
		echo "<script>window.confirm('Verifique os dados e tente novamente');</script>";   
     	echo "<script>window.location.replace('usua1.php');</script>";   

	}

	// Fecha a conexão com o banco de dados
	mysqli_close($conn);




?>