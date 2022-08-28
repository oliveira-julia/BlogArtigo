<?php
require "../config.php";


if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysql->real_escape_string($_POST['email']);
        $senha = $mysql->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
        $sql_query = $mysql->query($sql_code) or die("Falha na execução do código SQL: " . $mysql->error);

        $usuario =  $sql_query->fetch_assoc();

        if(password_verify($senha, $usuario['senha'])) {
            
            session_start();
            $_SESSION['id'] = $usuario['id'];

            header("Location: ..\admin\administrador.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Meu Blog</title>
    <meta charset="UTF-8">
</head>
<body>
    <div id="container">
    <h1> LOGIN ADMINISTRATIVO </h1>
    <form action="" method="post">
        <p>
            <label>Email</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit"> Entrar </button>
        </p>
    </form>
    </div>
</body>

</html>