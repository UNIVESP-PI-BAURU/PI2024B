<?php/*
session_start();

// Conexão com o banco de dados
//$conn = new mysqli("localhost", "seu_usuario", "sua_senha", "seu_banco");
include '../_master_/inc_conn.php';

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];

// Consulta SQL para obter o usuário pelo email
$stmt = $conn->prepare("SELECT id, nome, email, senha FROM tbProf WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Usuário encontrado, verifica a senha
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        // Senha correta, inicia a sessão e redireciona para página de perfil
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['email'] = $row['email'];
        header("Location: ind_perfil_p.php");
        exit();
    } else {
        echo "Senha incorreta!";
    }
} else {
    echo "Usuário não encontrado!";
}

// Fecha a declaração e a conexão
$stmt->close();
$conn->close();*/
?>

<!-------------------------------------------->


<?php
session_start();

// Verificar se os campos foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se o nome de usuário e senha foram enviados
    if (isset($_POST['nome']) && isset($_POST['senha'])) {
        // Conexão com o banco de dados
        include 'config.php';

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Dados do formulário
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Consulta SQL para obter o usuário pelo nome
        $stmt = $conn->prepare("SELECT id, nome, email, senha FROM tbProf WHERE nome = ?");
        $stmt->bind_param("s", $nome);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Usuário encontrado, verifica a senha
            $row = $result->fetch_assoc();
            if (password_verify($senha, $row['senha'])) {
                // Senha correta, inicia a sessão e redireciona para página de perfil
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['email'] = $row['email'];
                header("Location: ind_perfil_p.php");
                exit();
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "Usuário não encontrado!";
        }

        // Fecha a declaração e a conexão
        $stmt->close();
        $conn->close();
    } else {
        echo "Por favor, forneça nome de usuário e senha!";
    }
} else {
    echo "Método inválido de requisição!";
}
?>
