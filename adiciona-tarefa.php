<?php
    include ('cabecalho.php');
    include ('conecta.php');
    include ('banco-tarefas.php');

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $arquivo = $_FILES["arquivo"];

    //variaveis de arquivo
    $extensao = strtolower(substr($arquivo['name'], -4)); //pega a ext e deixa minusculo
    $nome_arquivo = time(). $extensao;
    $diretorio = "upload/";

    //move arquivo para diretorio upload
    move_uploaded_file($arquivo['tmp_name'], $diretorio.$nome_arquivo);

    if (insereTarefa($conexao, $nome, $descricao, $nome_arquivo)) { ?>
        <div class="conteudo-pagina">
            <p class="sucesso"> A tarefa foi adicionada com sucesso!</p>
        </div>
    <?php } else {
        $msg = mysqli_error($conexao);
    ?>  
        <div class="conteudo-pagina">
            <p class="alerta">Ocorreu o seguinte erro ao adicionar o produto: <?= $msg;?></p>
        </div>
    <?php };
    ?>

    <?php 
        include ('rodape.php');
    ?>