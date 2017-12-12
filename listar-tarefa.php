<?php include('cabecalho.php');
include('conecta.php');
include('banco-tarefas.php');

$tarefas = listaTarefa($conexao);
?>

<div class="conteudo-pagina">
    <h1 class="titulo">Lista de Tarefas</h1>
    <table class="tabela">
        <?php foreach($tarefas as $tarefa) :?>
            <tr>
                <td><?=$tarefa['nome']?></td>
                <td><?=$tarefa['descricao']?></td>
                <td class="centraliza"><a target="_blank" href="<?='upload/'.$tarefa['arquivo']?>"><?=$tarefa['arquivo']?></a></td>
                <td class="centraliza">
                    <!-- Alterar -->
                    <form action="formulario-altera-tarefa.php?id=<?=$tarefa['id']?>" method="POST">
                        <button class="btn alterar">alterar</button>
                    </form>
                </td>
                <td class="centraliza">
                    <!-- Remover -->
                    <form action="remove-tarefa.php?id=<?=$tarefa['id']?>" method="POST">
                        <button class="btn remover">remover</button>
                    </form>
                </td>

            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php include('rodape.php'); ?>