<?php
    if (!isset($_SESSION)) session_start();
    
    // Valida a sessão
    if (!isset($_SESSION['UsuarioEmail'])) {
        session_destroy();
        header("Location: index.php");
        die();
        exit;
    }
?>
   

<html>
    <head>
        <title>Teste - Voxus</title>
        <meta charset="utf-8">
        <link href="css/reset.css" rel="stylesheet"/>
        <link href="css/voxus.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav class="cabecalho">
                <ul class="menu-principal">
                    <li><a href="home.php">Inicio</a></li>
                    <li><a href="formulario-tarefa.php">Adicionar Tarefas</a></li>
                    <li><a href="listar-tarefa.php">Listar Tarefas</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </nav>
        