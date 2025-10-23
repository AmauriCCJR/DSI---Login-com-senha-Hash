<?php 
//Simulação de banco de dados
$users = [
    'amauri' => '$2y$10$ItxEMrA7dYXduOcP3a78leqBI9KyTSAuy18WqWUbqVY8Sb5L3qT1C', // Senha 1234
    'user' => '$2y$10$HOH5P9nNBpRtmOZlCGyhIO1nA3/CIVlzgztZa7IrT2eDwGHFyOqMu' //Senha abc
];


/*
Mostra a senha criptografada

password_hash criptografa as senhas, e para verificar elas é só usar o password_verify

echo password_hash('1234', PASSWORD_DEFAULT). "<br>";
echo password_hash('abc', PASSWORD_DEFAULT);
*/

?>