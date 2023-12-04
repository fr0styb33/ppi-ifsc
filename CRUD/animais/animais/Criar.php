<?php
include('includes/db.php');
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $nomeAnimal = $_POST['nome_animal'];
    $idade = $_POST['idade'];
    $especie = $_POST['especie'];

    
    $query = "INSERT INTO animais (nome_animal, idade, especie) VALUES ('$nomeAnimal', '$idade', '$especie')";
    $result = mysqli_query($conexao, $query);

    if ($result) {
       
        header('Location: index.php');
        exit;
    } else {
        echo "Erro ao cadastrar animal: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/crie.css">
    
</head>
<body>
    <h1>Cadastrar Novo Animal</h1>

    <div class="container">
    <title>Cadastrar Animal</title>
        <form method="POST">
            <label for="nome_animal">Nome do Animal:</label>
            <input type="text" id="nome_animal" name="nome_animal" required>

            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" required>

            <label for="especie">Espécie:</label>
            <input type="text" id="especie" name="esoecie" required>

            <button type="submit" id="btnCadastrar">Cadastrar</button>
            <button type="button" id="btnCancelar" onclick="cancelarEdicao()">Cancelar</button>
        </form>
    </div>
    <script>
        function cancelarEdicao() {
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>