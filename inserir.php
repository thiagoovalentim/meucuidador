<?php
    include('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nome"])) {
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $DataNasc = $_POST["dataNasc"];
        $genero = $_POST["genero"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];


        $sql = "INSERT INTO idoso (nome, cpf, rg, DataNasc, genero, email, telefone, endereco) VALUES ('$nome', '$cpf', '$rg', '$DataNasc', '$genero', '$email', '$telefone', '$endereco')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Registro inserido com sucesso!</p>";

            echo "<p><a href='index.php'>Voltar para a página principal</a></p>";

        } else {
            echo "Erro ao inserir registro: " . $conn->error;
        }
    }

    $conn->close();
?>
