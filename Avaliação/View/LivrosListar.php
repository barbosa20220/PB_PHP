<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Produto</h2>
    <table border="1">
        <tr>
            <td>titulo</td>
            <th>autor</th>
            <th>editora</th>
            <th>ano</th>
        </tr>
        <?php foreach($livros as $id => $u): ?>
            <tr>
                <td><?= $u['titulo']?></td>
                <td><?= $u['autor']?></td>
                <td><?= $u['editora']?></td>
                <td><?= $u['ano']?></td>
                <td>Acesso Aceito
                    <a href="/PB_PHP/Avaliação/Livros/telaEditar?id=<?= $id ?>">
                    Editar
                    </a>
                    <a href="/PB_PHP/Avaliação/Livros/excluir?id=<?= $id ?>">
                    excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>