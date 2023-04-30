<?php
include('protect.php');
include('bdConect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Conteudo</title>
</head>

<body>
    <h1>Alegriaa!! <?php echo $_SESSION['nome']; ?></h1>

    <table>
        <thead>
            <tr>
                <th>Id:</th>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Senha:</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['senha']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>

</html>