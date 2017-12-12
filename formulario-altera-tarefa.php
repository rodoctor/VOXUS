<?php 
include('cabecalho.php');
include('conecta.php');
include('banco-tarefas.php');

$id = $_GET['id'];
$tarefa = buscaTarefa($conexao, $id);
?>
    <div class="conteudo-pagina">
        <h1 class="titulo">Alterando Tarefa</h1>
        <form action="altera-tarefa.php" method="POST" enctype="multipart/form-data">
            <!-- Campo ID -->
            <input type="hidden" name="id" value="<?=$tarefa['id']?>">

            <!-- Nome -->
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?=$tarefa['nome']?>">

            <!-- Descrição -->
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"><?=$tarefa['descricao']?></textarea>

            <!-- Arquivo -->
            <!-- <label for="anexado">Arquivo Anexado</label>
            <p><a target="_blank" href="<?='upload/'.$tarefa['arquivo']?>"><?=$tarefa['arquivo']?></a></p>
            <input id ="anexo" name="anexo" type="hidden" value="<?=$tarefa['arquivo']?>"> -->
            
            <label for="arquivo">Alterar Anexo</label>
            <input type="file" id="arquivo" name="arquivo">

            <!-- SUBMIT -->
            <button type="submit">Alterar</button>
        </form>
    </div>



<?php include('rodape.php')?>