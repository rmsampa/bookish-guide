<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmacao_senha = $_POST["confirmacao_senha"];
    $aceite_termos = isset($_POST["aceite_termos"]) ? 1 : 0;
    
    if ($senha !== $confirmacao_senha) {
        echo "<script>alert('As senhas não coincidem!');</script>";
    } else {
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
    }
}
?>