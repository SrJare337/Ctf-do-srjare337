<?php
$servername = "localhost";
$username = "root";
$password = "123srjare";
$dbname = "techsolutions";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // SQL Injection vulnerability
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }
}

$conn->close();
?>
