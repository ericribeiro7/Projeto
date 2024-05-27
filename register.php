<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo_conta = $_POST['tipo_conta'];

    $sql = "INSERT INTO users (nome, email, senha, tipo_conta) VALUES ('$nome', '$email', '$senha', '$tipo_conta')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário registrado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
