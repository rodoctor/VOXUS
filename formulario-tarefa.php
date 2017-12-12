<?php include('cabecalho.php');?>
    <div class="conteudo-pagina">
        <h1 class="titulo">Formulario de Tarefas</h1>
        <form action="adiciona-tarefa.php" method="POST" enctype="multipart/form-data" class="formulario">

            <!-- Nome -->
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
            

            <!-- Descrição -->
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
            

            <!-- Arquivo -->
            <label for="arquivo">Anexar Arquivo</label>
            <input type="file" id="arquivo" name="arquivo">

            <!-- Enviar -->
            <button type="submit">Enviar</button>
        </form>
    </div>
<?php include('rodape.php'); ?>