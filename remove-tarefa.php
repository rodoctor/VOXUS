<?php 
include('cabecalho.php');
include('conecta.php');
include('banco-tarefas.php');

$id = $_GET['id'];

removeTarefa($conexao, $id);
header("Location: listar-tarefa.php?remove=true");
die(); //melhor prática após o location
?>

<?php include('rodape.php')?>