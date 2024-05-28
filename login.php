<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            echo "Login bem-sucedido";
        } else {
            echo "Senha incorreta";
        }
    } else {
        echo "Nenhum usuário encontrado com esse email";
    }

    $conn->close();
}
?>
