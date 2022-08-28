<!DOCTYPE html>
<html lang="pt-br">
<?php
require "../config.php";
include "../src/Artigo.php";
include "../src/protect.php";

$artigo = new Artigo($mysql);
$artigo = $artigo->exibirTodos();
?>
<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
        <div id="container">
        <h1>Página Administrativa</h1>
        <div>
            <?php foreach ($artigo as $artigos){?>
            <div id="artigo-admin">
                <p><?php echo  $artigos["titulo"]?></p>
                <nav>
                    <a class="botao" href="editar-artigo.php?id=<?php echo $artigos["id"] ?>">Editar</a>
                    <a class="botao" href="excluir-artigo.php?id=<?php echo $artigos["id"] ?>">Excluir</a>
                </nav>
            </div>
            <?php } ?>
            <nav>
                <a class="botao botao-block" href="adicionar-artigo.php">Adicionar Artigo</a><a class="botao botao-block" href="..\src\logout.php">Encerrar sessão</a><a class="botao botao-block" href="cadastroAdmin.php">Cadastrar outro usuario</a>
            </nav>
    </div>
</body>

</html>
