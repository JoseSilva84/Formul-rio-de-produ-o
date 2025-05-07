<?php
$servename = "localhost";
$username = "root";
$password = "123";
$dbname = "producao";

$conn = new mysqli($servename, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexção: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['telefone'];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>