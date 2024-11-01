<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $endereco_id = $_POST['endereco_id'];
    $status_pagamento = $_POST['status_pagamento'];
    $valor = $_POST['valor'];
    $usuario_id = 1; // ID de usuário para teste, ajustar conforme necessário

    include 'data/conexao.php';

    // Inserir o pedido no banco
    $stmt = $conn->prepare("INSERT INTO pedidos (usuario_id, total, status_pagamento, endereco_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$usuario_id, $valor, $status_pagamento, $endereco_id]);

    header("Location: pedidos.php");
    exit();
}
?>
