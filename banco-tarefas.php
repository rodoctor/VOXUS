<?php
    function insereTarefa($conexao, $nome, $descricao, $arquivo) {
        $query = "insert into tarefas (nome, descricao, arquivo) values ('{$nome}', '{$descricao}', '{$arquivo}')";
        return mysqli_query($conexao, $query);
    }

    function listaTarefa($conexao) {
        $tarefas = array();
        $query = "select * from tarefas";
        $resultado = mysqli_query($conexao, $query);

        while($tarefa = mysqli_fetch_assoc($resultado)) {
            array_push($tarefas, $tarefa);
        }
        return $tarefas;
    }

    function buscaTarefa($conexao, $id) {
        $query = "select * from tarefas where id = {$id}";
        $resultado =  mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    function alteraTarefa($conexao, $nome, $descricao, $arquivo, $id) {
        $query = "update tarefas set nome = '{$nome}', descricao = '{$descricao}', arquivo = '{$arquivo}' where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function removeTarefa($conexao, $id) {
        //deleta arquivo da pasta upload, permissão chmod 777
        $tarefa = buscaTarefa($conexao, $id);
        unlink('upload/'.$tarefa['arquivo']);

        $query = "delete from tarefas where id = {$id}";
        return mysqli_query($conexao, $query);
    }
?>