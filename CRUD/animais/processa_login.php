<?php
session_start();


$usuario_fixo = 'cachorro@gmail';
$senha_fixa = 'cahorro1234';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    if ($email === $usuario_fixo && $senha === $senha_fixa) {
       
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        
        header('Location: erro.php'); 
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
?>
