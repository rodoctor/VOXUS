<?php
    function buscaLogin($conexao, $email) {
        $query = "select * from login where email = '{$email}'";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>