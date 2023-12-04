<?php
include('includes/db.php');
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   


    header('Location: index.php');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $animalId = $_GET['id']; 

    
    $nomeAnimal = $_POST['nome_animal'];
    $idade = $_POST['idade'];
    $especie = $_POST['especie'];

    $query = "UPDATE animais SET nome_animal = '$nomeAnimal', idade = '$idade', especie = '$especie' WHERE id = $animalId";
    $result = mysqli_query($conexao, $query);

    if ($result) {
        
        header('Location: index.php');
        exit;
    } else {
        echo "Erro ao atualizar animal: " . mysqli_error($conexao);
    }
}


mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/crie.css">
    <title>Editar Animal</title>
</head>
<body>
    

    <div class="container">
    <h1>Editar Animal</h1>
        <form method="POST">
            <label for="nome_animal">Nome do Animal:</label>
            <input type="text" id="nome_animal" name="nome_animal" value="<?php echo $animais['nome_animal']; ?>" required>

            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" value="<?php echo $animais['idade']; ?>" required>

            <label for="sabor">Espécie:</label>
            <input type="text" id="especie" name="especie" value="<?php echo $animais['especie']; ?>" required>

            <button type="submit" id="btnEditar">Salvar Edição</button>
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