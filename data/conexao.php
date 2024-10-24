<?php
$serverName = "localhost";
$dbName = "tatsu";
$username = "root";
$password = "";

// Cria a conexão usando mysqli
$conn = new mysqli($serverName, $username, $password, $dbName);
$id_usuario = $conn->insert_id;
$_SESSION['id_usuario'] = $id_usuario;

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Defina o charset para evitar problemas com acentos e caracteres especiais
$conn->set_charset("utf8");

$sql = "
    CREATE TABLE IF NOT EXISTS USUARIO(
        ID_USUARIO INT(6) AUTO_INCREMENT PRIMARY KEY NOT NULL,
        NOME_USUARIO VARCHAR(100) NOT NULL,
        EMAIL_USUARIO VARCHAR(100) NOT NULL,
        SENHA_USUARIO VARCHAR(255) NOT NULL,
        DATA_NASC DATE NOT NULL,
        GENERO VARCHAR(100) NOT NULL,
        ENDERECO VARCHAR(100) NOT NULL,
        ESTADO VARCHAR(100) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS RESERVA(
        ID_RESERVA INT(6) AUTO_INCREMENT PRIMARY KEY NOT NULL,
        NOME_CLIENTE VARCHAR(100) NOT NULL,
        QUANTIDADE_PESSOAS INT(11) NOT NULL,
        DIA_RESERVA DATE NOT NULL,
        HORA_RESERVA TIME NOT NULL,
        AREA_RESTAURANTE VARCHAR(100) NOT NULL,
        TIPO_RESERVA VARCHAR(100) NOT NULL,
        ID_USUARIO INT(6),
        FOREIGN KEY (ID_USUARIO) REFERENCES USUARIO(ID_USUARIO)
    );
";
?>