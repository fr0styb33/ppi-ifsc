<?php
include('includes/db.php');

if (isset($_GET['id'])) {
    $animalId = $_GET['id'];

   
    $query = "DELETE FROM animais WHERE id = $animalId";
    $result = mysqli_query($conexao, $query);

    if (!$result) {
        die("Erro ao excluir animal: " . mysqli_error($conexao));
    }

    mysqli_close($conexao);

    header('Location: index.php');
    exit;
} else {
    die("ID do animal não fornecido");
}
?>