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
            <td>Nome</td>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Validade</th>
        </tr>
        <?php foreach($Produto as $u): ?>
            <tr>
                <td><?= $u['Nome']?></td>
                <td><?= $u['Preço']?></td>
                <td><?= $u['Quantidade']?></td>
                <td><?= $u['Validade']?></td>
                <td>Compra Feita
                    <a href="/PB_PHP/Atividade01/Produto/listar/telaCadastro?id=<?= $id ?>">
                    Editar
                    </a>
                    <a href="/PB_PHP/Atividade01/Produto/listarexcluir?id=<?= $id ?>">
                    excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>