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
    <title>Cadastrar-se</title>
</head>

<body>
    <h1>Área de Cadastro:<br></h1>
    <form action="" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" id="input_nome">
        <p>
        </p>
        <label>E-mail:</label>
        <input type="text" name="email" id="input_nome">
        <p>
        </p>
        <label>Senha:</label>
        <input type="password" name="senha" id="input_senha">
        <p>
        </p>
        <button type="submit">Cadastrar</button>
        <p><a href="index.php">Entrar</a></p>
    </form>

</body>

</html>