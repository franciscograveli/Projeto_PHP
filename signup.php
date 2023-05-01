<?php
include("bdConect.php");

//
if (isset($_POST['email']) || isset($POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha um e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha uma senha";
    } else {

        $nomeCad = $mysqli->real_escape_string($_POST['nome']);
        $emailCad = $mysqli->real_escape_string($_POST['email']);
        $senhaCad = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "INSERT INTO user (id, nome, email, senha) VALUES (NULL, '$nomeCad', '$emailCad', '$senhaCad')";
        if ($mysqli->query($sql_code) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $mysqli->error;
        }
    }
    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastrar-se</title>
</head>

<body>
    <class class="grid_pai">
        <class class="grid_filho">
            <class class="lateral1">
                <img src="img/logo-meta.png" alt="logo-meta" class="logo-meta">
                <form action="" method="POST">
                    <input type="text" name="nome" id="input_nome" placeholder="Nome:">
                    <p>
                    </p>
                    <input type="text" name="email" id="input_nome" placeholder="E-mail:">
                    <p>
                    </p>
                    <input type="password" name="senha" id="input_senha" placeholder="Senha:">
                    <p>
                    </p>
                    <button type="submit" id="btn_login">Cadastrar</button>
                    <a href="index.php" class="btnCad">Entrar</a>
                </form>
            </class>
            <class class="lateral2">
            </class>
        </class>
    </class>
</body>

</html>