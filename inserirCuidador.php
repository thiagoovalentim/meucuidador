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
        $certificacoes = $_POST["certificacoes"];
        $disponibilidade = $_POST["disponibilidade"];


        $sql = "INSERT INTO cuidador (nome, cpf, rg, DataNasc, genero, email, telefone, endereco, certificacoes, disponibilidade) VALUES ('$nome', '$cpf', '$rg', '$DataNasc', '$genero', '$email', '$telefone', '$endereco', '$certificacoes', '$disponibilidade')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Registro inserido com sucesso!</p>";

            echo "<p><a href='index.php'>Voltar para a página principal</a></p>";

        } else {
            echo "Erro ao inserir registro: " . $conn->error;
        }
    }

    $conn->close();
?>
