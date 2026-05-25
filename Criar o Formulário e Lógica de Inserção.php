<?php 
require 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO clientes (nome_completo, cpf, email, data_nascimento) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['data_nasc']]);
    echo "<div class='alert alert-success'>Cadastrado com sucesso!</div>";
}
?>