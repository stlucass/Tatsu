<?php
$serverName = "localhost";
$dbName = "tatsu";
$username = "root";
$password = "";

// Cria a conexão usando mysqli
$conn = new mysqli($serverName, $username, $password, $dbName);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} else {
}

// Defina o charset para evitar problemas com acentos e caracteres especiais
$conn->set_charset("utf8");

// SQL para criar a tabela USUARIO
$sql_usuario = "
    CREATE TABLE IF NOT EXISTS USUARIO(
        ID_USUARIO INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NOME_USUARIO VARCHAR(100) NOT NULL,
        EMAIL_USUARIO VARCHAR(100) NOT NULL,
        SENHA_USUARIO VARCHAR(255) NOT NULL,
        DATA_NASC DATE NOT NULL,
        GENERO VARCHAR(100) NOT NULL,
        ENDERECO VARCHAR(100) NOT NULL,
        ESTADO VARCHAR(100) NOT NULL
    );
";

// Executa o comando para criar a tabela USUARIO
if ($conn->query($sql_usuario) === TRUE) {
} else {
}

// SQL para criar a tabela RESERVA
$sql_reserva = "
    CREATE TABLE IF NOT EXISTS RESERVA(
        ID_RESERVA INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NOME_CLIENTE VARCHAR(100) NOT NULL,
        EMAIL_CLIENTE VARCHAR(100) NOT NULL,
        QUANTIDADE_PESSOAS INT(11) NOT NULL,
        DIA_RESERVA DATE NOT NULL,
        HORA_RESERVA TIME NOT NULL,
        AREA_RESTAURANTE VARCHAR(100) NOT NULL,
        TIPO_RESERVA VARCHAR(100) NOT NULL,
        OBSERVACOES VARCHAR(255) NOT NULL,
        ID_USUARIO INT(6) UNSIGNED,
        FOREIGN KEY (ID_USUARIO) REFERENCES USUARIO(ID_USUARIO)
    );
";

// Executa o comando para criar a tabela RESERVA
if ($conn->query($sql_reserva) === TRUE) {
} else {
}

$sql_delivery = "
    CREATE TABLE IF NOT EXISTS DELIVERY(
        ID_RESERVA INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NOME_CLIENTE VARCHAR(100) NOT NULL,
        EMAIL_CLIENTE VARCHAR(100) NOT NULL,
        QUANTIDADE_PESSOAS INT(11) NOT NULL,
        DIA_RESERVA DATE NOT NULL,
        HORA_RESERVA TIME NOT NULL,
        AREA_RESTAURANTE VARCHAR(100) NOT NULL,
        TIPO_RESERVA VARCHAR(100) NOT NULL,
        OBSERVACOES VARCHAR(255) NOT NULL,
        ID_USUARIO INT(6) UNSIGNED,
        FOREIGN KEY (ID_USUARIO) REFERENCES USUARIO(ID_USUARIO)
    );
";


// Executa o comando para criar a tabela RESERVA
if ($conn->query($sql_reserva) === TRUE) {
} else {
}

// Fecha a conexão
?>