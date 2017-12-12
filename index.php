<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link href="css/reset.css" rel="stylesheet"/>
        <link href="css/voxus.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>

    <div class="container">
        <div class="login">
            <h1 class="titulo">Login</h1>
            <form class="formulario" action="valida-login.php" method="POST">
                <label for="">Email</label>
                <input type="email" id="email" name="email">

                <label for="">Senha</label>
                <input type="password" id="senha" name="senha">

                <button type="submit">Logar</button>
            </form>
        </div>
        <?php include('rodape.php')?>
    </div>
</html>