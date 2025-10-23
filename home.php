 <?php 
    session_start(); //Começa a sessão

    if (!isset($_SESSION['SuperUsuario'])){ //Se não achar o usuário de sessão, volta para a tela de login
        header('Location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Entrouu</title>
</head>
<body>
    <h2>Olá <?php $_SESSION['SuperUsuario'] ?>!</h2>
    <p>Você está na área restrita do sistema!</p>
    <a href="logout.php">Sair</a>
</body>
</html>