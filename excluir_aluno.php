<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    // Conexão com o banco de dados
    $servername = "mysql.jrcf.dev";
    $username = "usrapp";
    $password = "010203";
    $dbname = "escola";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Exclui o aluno
    $sql = "DELETE FROM Alunos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Aluno excluído com sucesso";
    } else {
        echo "Erro ao excluir aluno: " . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="excluir_aluno.php">
    ID do Aluno: <input type="text" name="id"><br>
    <input type="submit" value="Excluir Aluno">
</form>
