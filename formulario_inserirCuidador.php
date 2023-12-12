<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP e MySQL - Inserir</title>
        <link rel="stylesheet" href="style-form2.css">
    </head>
    <body>

        <form action="inserirCuidador.php" method="post">
            Nome: <input type="text" name="nome" required><br>
            CPF: <input type="text" name="cpf" required><br>
            RG: <input type="text" name="rg" required><br>
            Data de Nascimento: <input type="text" name="dataNasc" required><br>
            Gênero: <input type="text" name="genero" required><br>
            Email: <input type="email" name="email" required><br>
            Telefone: <input type="text" name="telefone" required><br>
            Endereço: <input type="text" name="endereco" required><br>
            Certificações: <input type="text" name="certificacoes" required><br>
            Disponibilidade: <input type="text" name="disponibilidade" required><br>


            <input type="submit" value="Inserir">
        </form>
    </body>
</html>