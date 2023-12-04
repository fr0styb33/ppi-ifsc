<?php
include('includes/db.php');

session_start();

// Verifique se o usuário está autenticado.
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}


$query = "SELECT id, nome_animal, idade, especie FROM animais";
$result = mysqli_query($conn, $query);


if (!$result) {
    die("Erro na consulta: " . mysqli_error($conn));
}


$doces = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/dash.css">
    <title>Página Principal</title>

</head>
<body>
    <h1>Bem-vindo à Página Principal</h1>

    
    <div>
        <label for="pesquisar">Pesquisar:</label>
        <input type="text" id="pesquisar" name="pesquisar">
        <button type="button" id="btnPesquisar" onclick="pesquisarDoces()">Pesquisar</button>
        <button type="button" id="btnCadastrar" onclick="abreCadastro()">Cadastrar</button>
    </div>

    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Animal</th>
                <th>Idade</th>
                <th>Espécie</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animais as $animal): ?>
                <tr>
                    <td><?php echo $animal['id']; ?></td>
                    <td><?php echo $animal['nome_animal']; ?></td>
                    <td><?php echo $animal['idade']; ?></td>
                    <td><?php echo $animal['especie']; ?></td>
                    <td>
                        <button type="button" onclick="excluirAnimal(<?php echo $animal['id']; ?>)">Excluir</button>
                        <button type="button" onclick="editarAnimal(<?php echo $animal['id']; ?>)">Editar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <script>
    function pesquisarAnimais() {
        
        var termoPesquisa = document.getElementById("pesquisar").value.toLowerCase();

        var linhasTabela = document.querySelectorAll("tbody tr");
        linhasTabela.forEach(function (linha) {
            var nomeDoce = linha.querySelector("td:nth-child(2)").textContent.toLowerCase(); 
            
            if (nomeDoce.includes(termoPesquisa)) {
                linha.style.display = "";
            } else {
                linha.style.display = "none";
            }
        });
    }
</script>
<script>
function excluirAnimal(animalId) {
    
        window.location.href = 'excluir.php?id=' + animalId;
    
}

function editarAnimal(animalId) {
    window.location.href = 'editar.php?id=' + animalId;
}

function cadastrarAnimal() {
    
    window.location.href = 'criar.php';
}
</script>
</body>
</html>