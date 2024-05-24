<?php
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['password'])) {
    
        
        include_once('database.php');
        $cpf = $_POST['cpf'];
        $password = $_POST['password'];
       
        $sql = "SELECT * FROM alunos WHERE cpf = '$cpf' and password = '$password'";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            $error_message = "Login Ou senha inválido.";
            unset($_SESSION['cpf']);
            unset($_SESSION['password']);
            unset($_SESSION['nome']);
            header('Location: login.php');
        }
        else{
            // acessou
            $row = $result->fetch_assoc();
            $_SESSION['cpf'] = $cpf;
            $_SESSION['password'] = $password;
            $_SESSION['nome'] = $row['nome']; 
            header('Location: session.php');
        }
    }
    else
    { 
        
        header('Location: login.php');
    };
?>  