<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $referencia = htmlspecialchars($_POST["referencia"]);
    $descricao = htmlspecialchars($_POST["descricao"]);
    $cor = htmlspecialchars($_POST["cor"]);
    $tamanho = htmlspecialchars($_POST["tamanho"]);
    $caracteristicas = htmlspecialchars($_POST["caracteristicas"]);

    // Conexão com o banco de dados (exemplo usando MySQLi)
    $conn = new mysqli("localhost", "usuario", "senha", "banco");

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "INSERT INTO produtos (referencia, descricao, cor, tamanho, caracteristicas)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $referencia, $descricao, $cor, $tamanho, $caracteristicas);

    if ($stmt->execute()) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
