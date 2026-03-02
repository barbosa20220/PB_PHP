<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuario</h2>
    <table border="1">
        <tr>
            <td>nome</td>
            <th>email</th>
            <th>ações</th>
        </tr>
        <?php foreach($usuario as $id => $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['email']?></td>
                <td>
                    <a href="/PB_PHP/mvc.exemplo/usuario/telaCadastro?id=<?= $id ?>">
                    Editar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>