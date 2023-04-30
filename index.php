<?php
include('bdConect.php');

if (isset($_POST['email']) || isset($POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT *FROM user WHERE email= '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na Conexão");

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: content.php");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Projeto</title>
</head>

<body>
    <h1>Área de Login:<br></h1>
    <form action="" method="POST">
        <label>E-mail:</label>
        <input type="text" name="email" id="input_nome">
        <p>
        </p>
        <label>Senha:</label>
        <input type="password" name="senha" id="input_senha">
        <p>
        </p>
        <button type="submit">Entrar</button>
        <p><a href="signup.php">Cadastrar</a></p>
    </form>

</body>

</html>