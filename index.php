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
    <link rel="stylesheet" href="css/style.css">
    <title>Login Projeto</title>
</head>

<body>
    <class class="grid_pai">
        <class class="grid_filho">
            <class class="lateral1">
                <img src="img/logo-meta.png" alt="logo-meta" class="logo-meta">
                <form action="" method="POST">
                    <input type="text" name="email" id="input_email" placeholder="E-mail:">
                    <p>
                    </p>
                    <input type="password" name="senha" id="input_senha" placeholder="Senha:">
                    <p>
                    </p>
                    <button type="submit" id="btn_login">Entrar</button>
                    <a href="signup.php" class="btnCad">Cadastrar</a>
                </form>
            </class>
            <class class="lateral2">
            </class>
        </class>
    </class>
</body>

</html>