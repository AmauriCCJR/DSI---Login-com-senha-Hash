<?php 
session_start();
require 'users.php';

//qualquer coisa

$error = '';



if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $Abacaxi = $_POST['usuario'] ?? ''; //Recebe o conteudo do form, e se não achar nenhum valor, ao invés de retornar null, retorna ''
    $senha = $_POST['senha'] ?? '';


    //Verifica se na variavel users(users.php) há o usuario digitado(abacaxi) e descriptografa a senha e verifica se ela bate com o usuario dela
    if (isset($users[$Abacaxi]) && password_verify($senha, $users[$Abacaxi])){
        $_SESSION['SuperUsuario'] = $Abacaxi; //Atribui o nome do usuário como uma variavel de sessão, tipo cookies, só que no servidor
        header('Location: home.php'); //Encaminha direto para a pagina home
        exit;
    } else {
        $error = 'Usuário ou Senha Inválidos!';
    }

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Login</title>
</head>
<body>
    <h2>LOGIN COM HASH</h2>
    <?php if ($error): ?>
        <p style = "color: red"> <?php $error ?></p>
     <?php endif; ?>

     <form method="POST" action="">
        <label>Usuário: </label><input type="text" name="usuario" required><br><br>
        <label>Senha: </label><input type="password" name="senha" required><br><br>

        <input type="submit" value="Tentar entrar">




     </form>





</body>
</html>
