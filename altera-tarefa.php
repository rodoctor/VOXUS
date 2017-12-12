<?php 
include('cabecalho.php');
include('conecta.php');
include('banco-tarefas.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    // $anexo = $_FILES['anexo'];
    $arquivo = $_FILES['arquivo'];

    //Verifica se houve alteração de anexo
    // if($_FILES['arquivo']=null) {
    //      $arquivo['name'] = $anexo;
    //  } else {
    //      $arquivo = $_FILES['arquivo'];
    //  };

    //variaveis de arquivo
    $extensao = strtolower(substr($arquivo['name'], -4)); //pega a ext e deixa minusculo
    $nome_arquivo = time(). $extensao;
    $diretorio = "upload/";

    //move arquivo para diretorio upload
    move_uploaded_file($arquivo['tmp_name'], $diretorio.$nome_arquivo);

    if (alteraTarefa($conexao, $nome, $descricao, $nome_arquivo, $id)) { ?>
        <div class="conteudo-pagina">
            <p class="sucesso"> A tarefa foi alterada com sucesso!</p>
        </div>
    <?php } else {
        $msg = mysqli_error($conexao);
    ?>
        <div class="conteudo">
            <p class="alerta">Ocorreu o seguinte erro ao alterar a tarefa: <?= $msg;?></p>
        </div>
    <?php };
    ?>

<?php include('rodape.php')?>