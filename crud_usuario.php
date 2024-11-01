<?php
session_start();
require ("data/conexao.php");

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}


$email = $_SESSION['email'];
$query = $conn->prepare("SELECT * FROM usuario WHERE email_usuario = ?");
$query->bind_param("s", $email);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
} else {
    $_SESSION['error'] = "Usuário não encontrado.";
    header('Location: perfil.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email_novo = $_POST['email'];
    $senha = $_POST['senha'];

    $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);
    $query = $conn->prepare("UPDATE usuario SET nome_usuario = ?, email_usuario = ?, senha_usuario = ? WHERE email_usuario = ?");
    $query->bind_param("ssss", $nome, $email_novo, $hashed_senha, $_SESSION['email']);
    
    if ($query->execute()) {
        $_SESSION['success'] = "Dados atualizados com sucesso!";
        $_SESSION['email'] = $email_novo;
        header('Location: perfil.php');
        exit();
    } else {
        $_SESSION['error'] = "Erro ao atualizar os dados.";
    }
}

$query->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
</head>
<body>
    <h1>Atualizar Dados do Usuário</h1>
    
    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>
    
    <form action="atualizar_usuario.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo isset($usuario['nome']) ? htmlspecialchars($usuario['nome']) : ''; ?>" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($usuario['email']) ? htmlspecialchars($usuario['email']) : ''; ?>" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
