<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body>
    <form method="post" action="ope.php">
        <fieldset>
            <legend>Login</legend>
            <label id="usuario">Usuário</label><input type="text" placeholder="Digite o seu usuário" name="usuario" id="usuario"><br/>
            <label id="senha">Senha</label><input type="password" placeholder="Digite a sua senha" name="senha" id="senha"><br/>
            <input type="submit" value="Entrar">
        </fieldset>
    </form>
</body>
</html>