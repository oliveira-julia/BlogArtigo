<?php
include "..\config.php";

$nome = $_POST['nome'];
$senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
$email  = $_POST['email'];

$SELECT = "SELECT email From usuarios Where email = ?";
$INSERT = "INSERT Into usuarios (nome , email ,senha)values(?,?,?)";

//Prepare statement
     $stmt = $mysql->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $mysql->prepare($INSERT);
      $stmt->bind_param("sss", $nome,$email,$senha);
      $stmt->execute();
      echo "Registrado com sucesso";
     } else {
      ?> <h1><?php echo "Alguem ja tem esse nome de utlizador , coloque outro";?> <h1> <?php
     }
     $stmt->close();
     $mysql->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CADASTRAR</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

<div id="container">
    <a class="botao botao-block" href="..\admin\administrador.php">Pagina ADMIN</a>
</body>
</html>
