<?php
include('bdConect.php');

if (isset($_POST['email']) || isset($POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        ?><!DOCTYPE html><div class="echo" id="echoruim">Preencha seu email!</div> </html> <?php
    } else if (strlen($_POST['senha']) == 0) {
        ?><!DOCTYPE html><div class="echo" id="echoruim">Preencha sua senha!</div> </html> <?php
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
    <script src="https://kit.fontawesome.com/177586c31f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
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
            <div class="lateral2-text">
               <h2>Acesse nosso<br> <b>PORTAL DO CLIENTE</b></h2>
              <p>Informe seu usuário e senha para acessar.</p>
           </div>
            </class>
        </class>
    </class>
    </class>
</body>

</html>