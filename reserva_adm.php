<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reserva Tatsu</title>
    <link href="assets/css_CRUD/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css_CRUD/style.css" rel="stylesheet" media="screen">
    <script language="JavaScript" type="text/javascript" src="assets/js_CRUD/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="assets/js_CRUD/bootstrap-3.1.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="assets/js_CRUD/jquery.validationEngine-2.6.2.js"></script>
    <script language="JavaScript" type="text/javascript" src="assets/js_CRUD/jquery.validationEngine-pt.js"></script>
    <link href="assets/css_CRUD/validationEngine.jquery.css" rel="stylesheet" media="screen">
    <script language="JavaScript" type="text/javascript" src="assets/js_CRUD/jquery.dataTables-1.10.0.min.js"></script>
    <link href="assets/css_CRUD/jquery.dataTables.min.css" rel="stylesheet" media="screen">
    <link rel="icon" href="./assets/images/dragaoicone.png" type="image/x-icon">
</head>

<body style="background-color: #000; color: #a3a3a3; font-weight: 100;">

    <!-- FIM PHP -->

    <a href="index.php" class="btnvoltar" data-btn>Voltar</a>
    <div class="container">
        <h1
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 48px; text-align: center; text-transform: uppercase; background-color: #000; color: #fff; padding: 20px;">
            Reserva Tatsu</h1>
        <!-- PHP -->
        <?php
        session_start();
        include('data/conexao.php');

        // Executa a consulta SQL
        $sqlSelect = "SELECT * FROM reserva";
        $stmt = $conn->query($sqlSelect); // Execute a consulta e armazene o resultado em $stmt
        
        try {
            echo "
    <style>
        body {
            background-color: white; /* Fundo branco */
            color: black; /* Texto preto */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2; /* Cor de fundo do cabeçalho */
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Cor de fundo das linhas pares */
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }
        .btn-info {
            background-color: #007bff; /* Azul */
        }
        .btn-danger {
            background-color: #dc3545; /* Vermelho */
        }
    </style>

    <table class='table table-striped'>
    <thead>
    <tr>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>QUANTIDADE</th>
        <th>DIA</th>
        <th>HORA</th>
        <th>ÁREA</th>
        <th>TIPO</th>
        <th>ID</th>
        <th>OBSERVAÇÕES</th>
    </tr>
    </thead>
    <tbody>";

            // Verifica se existem registros
            if ($stmt->num_rows > 0) {
                while ($row = $stmt->fetch_assoc()) {
                    echo "<tr>
            <td>" . htmlspecialchars($row["nome_cliente"]) . "</td>
            <td>" . htmlspecialchars($row["email_cliente"]) . "</td>
            <td>" . htmlspecialchars($row["quantidade_pessoas"]) . "</td>
            <td>" . htmlspecialchars($row["dia_reserva"]) . "</td>
            <td>" . htmlspecialchars($row["hora_reserva"]) . "</td>
            <td>" . htmlspecialchars($row["area_restaurante"]) . "</td>
            <td>" . htmlspecialchars($row["tipo_reserva"]) . "</td>
            <td>" . htmlspecialchars($row["id_reserva"]) . "</td>
            <td>" . htmlspecialchars(string: $row["observacoes"]) . "</td>

            </tr>";
                }
            } else {
                echo "<tr>
        <td colspan='10'>
        Nenhum registro encontrado
        </td>
        </tr>";
            }
            echo "</tbody></table>";

        } catch (Exception $erro) {
            die("Não foi possível executar $sqlSelect: " . $erro->getMessage());
        }

        // Fecha a conexão
        $conn->close();
        ?>



</body>

</html>