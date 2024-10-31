<?php
// Conexão com o banco de dados
$servername = "mysql.jrcf.dev";
$username = "usrapp";
$password = "010203";
$dbname = "escola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Seleciona os alunos
$sql = "SELECT id, nome, email FROM Alunos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibe os dados de cada aluno
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
