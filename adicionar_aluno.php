<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Insere o aluno no banco de dados
    $sql = "INSERT INTO Alunos (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo aluno cadastrado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

?>

<form method="post" action="adicionar_aluno.php">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Adicionar Aluno">
</form>
