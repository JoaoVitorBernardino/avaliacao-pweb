<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <?php
    if($_REQUEST)
        if($_REQUEST['sucesso'] == true)
            echo "Usuário cadastradp com sucesso";
    ?>
    <h1>Cadastro de Usuário</h1>

    <form action="../index.php?classe=Usuario&acao=cadastrar" method="POST">
    Nome: <input type="text" name="nome"><br>
    CPF:  <input type="text" name="cpf"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit" value="cadastrar">
    </form>

    <h1>Login de Usuário</h1>

    <form action="../index.php?classe=Usuario&acao=login" method="POST">
        CPF: <input type="text" name="cpf"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Login">
</body>
</html>