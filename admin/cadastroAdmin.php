<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CADASTRAR</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

<form method="POST" action="..\src\cadastro.php">
<div id="container">
<h1>CADASTRO ADMINISTRATIVO</h1>
<p>
            <label>Nome</label>
            <input type="text" name="nome">
        </p>
<p>
            <label>Email</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>senha</label>
            <input type="password" name="senha">
        </p>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>
</body>
</html>