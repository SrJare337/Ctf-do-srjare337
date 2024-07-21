<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Verificar se o usuário e a senha são os esperados
    if ($user === 'srjare' && $pass === '123') {
        // Login bem-sucedido
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }
}

$conn->close();
?>
