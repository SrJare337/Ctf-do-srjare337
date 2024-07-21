<?php
$servername = "localhost";
$username = "root";
$password = "root";
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

    // Usar prepared statements para evitar SQL Injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login bem-sucedido
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }

    $stmt->close();
}

$conn->close();
?>
