<?php
    include('conecta.php');
    include('banco-login.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $usuario = buscaLogin($conexao, $email);

    //Testa se está vazio
    if (!empty($_POST) AND (empty($email) OR empty($senha))) {
        header("Location: index.php"); 
        die();
        exit;
    }

    if ($usuario['email']!=$email) {
        echo "Usuário não encontrado ou inválido";
        header("Location: index.php"); 
        die();
        exit;
    }

    if ($usuario['senha']!=$senha) {
        echo "Senha inválida";
        header("Location: index.php"); 
        die();
        exit;

    } else {

        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();
        
        // Salva os dados encontrados na sessão
        $_SESSION['UsuarioEmail'] = $usuario['email'];

        // Redireciona o visitante
        header("Location: home.php"); exit;
    }


?>

