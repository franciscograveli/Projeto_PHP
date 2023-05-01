<?php
include("bdConect.php");

//
if (isset($_POST['email']) || isset($POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        ?><!DOCTYPE html><div class="echo" id="echoruim">Preencha um email!</div> </html> <?php
    } else if (strlen($_POST['senha']) == 0) {
        ?><!DOCTYPE html><div class="echo" id="echoruim">Preencha uma senha!</div> </html> <?php
    } else {

        $nomeCad = $mysqli->real_escape_string($_POST['nome']);
        $emailCad = $mysqli->real_escape_string($_POST['email']);
        $senhaCad = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "INSERT INTO user (id, nome, email, senha) VALUES (NULL, '$nomeCad', '$emailCad', '$senhaCad')";
        if ($mysqli->query($sql_code) === TRUE) {
            ?><!DOCTYPE html><div class="echo" id="echook">Cadastro realizado com sucesso!</div> </html> <?php
        } else {
            ?><!DOCTYPE html><div class="echo" id="echoruim">Erro ao cadastrar:</div> </html> <?php
            echo "Erro ao cadastrar: " . $mysqli->error;
        }
    }
    $mysqli->close();
}//verificações relacionadas ao cadastro, conexão com banco e alteração no mesmo
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
                    <a href="index.php" class="btnLog">Entrar</a>
                </form>
            </class>
            <class class="lateral2">
            </class>
        </class>
    </class>
</body>

</html>