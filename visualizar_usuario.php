<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dados do Usuário</title>
    <link rel="icon" href="./assets/images/dragaoicone.png" type="image/x-icon">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>

<body>

    <?php
    include('data/conexao.php');
    session_start();

    // Verifica se o usuário está logado
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }

    $email = $_SESSION['email'];

    // Consulta os dados do usuário
    $query = $conn->prepare("SELECT * FROM usuario WHERE email_usuario = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    // Verifica se o usuário foi encontrado
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        echo "Usuário não encontrado.";
        exit();
    }
    ?>

    <a href="index.php" class="btn" data-btn>Voltar</a>
    <br />
    <section class="container">
        <header>Dados do Usuário</header>
        <div class="user-data">
            <p><strong>Nome Completo:</strong> <?php echo htmlspecialchars($usuario['NOME_USUARIO']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($usuario['EMAIL_USUARIO']); ?></p>
            <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($usuario['DATA_NASC']); ?></p>
            <p><strong>Gênero:</strong> <?php echo htmlspecialchars($usuario['GENERO']); ?></p>
            <p><strong>Endereço:</strong> <?php echo htmlspecialchars($usuario['ENDERECO']); ?></p>
            <p><strong>Estado:</strong> <?php echo htmlspecialchars($usuario['ESTADO']); ?></p>
        </div>
    </section>

    <!-- SCRIPTS DO JS -->
    <script src="./assets/js/script2.js"></script>
    <script src="https://kit.fontawesome.com/56bcd8394b.js" crossorigin="anonymous"></script>

</body>

</html>
