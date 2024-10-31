<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno_id = $_POST["aluno_id"];
    $disciplina_id = $_POST["disciplina_id"];
    $nota = $_POST["nota"];

    // Conexão com o banco de dados
    $servername = "mysql.jrcf.dev";
    $username = "usrapp";
    $password = "010203";
    $dbname = "escola";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Insere a avaliação no banco de dados
    $sql = "INSERT INTO Avaliacoes (aluno_id, disciplina_id, nota) VALUES ('$aluno_id', '$disciplina_id', '$nota')";

    if ($conn->query($sql) === TRUE) {
        echo "Avaliação adicionada com sucesso";
    } else {
        echo "Erro ao adicionar avaliação: " . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="adicionar_avaliacao.php">
    ID do Aluno: <input type="text" name="aluno_id"><br>
    ID da Disciplina: <input type="text" name="disciplina_id"><br>
    Nota: <input type="text" name="nota"><br>
    <input type="submit" value="Adicionar Avaliação">
</form>
