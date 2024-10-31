<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Conexão com o banco de dados
    $servername = "mysql.jrcf.dev";
    $username = "usrapp";
    $password = "010203";
    $dbname = "escola";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Atualiza os dados do aluno
    $sql = "UPDATE Alunos SET nome='$nome', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Dados do aluno atualizados com sucesso";
    } else {
        echo "Erro ao atualizar os dados: " . $conn->error;
    }

    $conn->close();
}
?>
<form method="post" action="editar_aluno.php">
    ID do Aluno: <input type="text" name="id"><br>
    Novo Nome: <input type="text" name="nome"><br>
    Novo Email: <input type="text" name="email"><br>
    <input type="submit" value="Atualizar">
</form>
