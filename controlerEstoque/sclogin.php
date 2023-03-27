<?php
    include_once "conexao.php";

    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $sql = "SELECT * FROM usuario WHERE email = \"$email\" and senha = \"$senha\"";
        // echo $sql;
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $linha = mysqli_fetch_array($result);

            session_start(); //Iniciando a sessão
            $_SESSION['nome'] = $linha['nome'];
            $_SESSION['id'] = $linha['id'];

            $tipo = $linha['tipo'];

            session_write_close(); //Fechando o registro na sessão após a escrita

            //echo "<script>alert(\"Sessão registrada, redirecionamento agora\");</script>";
            
                if($tipo == 1){
                     echo "<script>window.location.replace('usua1.php');</script>";   
                }
                 if($tipo == 2){
                     echo "<script>window.location.replace('usua2.php');</script>";   
                }
           
        }
            
        else{
            echo "<script>window.confirm('Usuário sem permição de acesso, solicite ao ADM liberação de seu acesso.');</script>";

            echo "<script>window.location.replace('login.php');</script>";
        }
        
  
    }

?>