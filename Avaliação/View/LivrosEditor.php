<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2> Editar livros</h2>
    <a href="/PB_PHP/Avaliação/Livros/listar">Ir tela Listar</a>
    <form method="POST" action= "atualizado?id=<?=$_GET['id']?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="titulo" value="<?= htmlspecialchars($Livros['titulo'])?>" require>
        <input type="text" name="autor" value="<?= htmlspecialchars($Livros['autor'])?>" require>
        <input type="text" name="editora" value="<?= htmlspecialchars($Livros['editora'])?>" require>
        <input type="date" name="ano"  value="<?= htmlspecialchars($Livros['ano'])?>" require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>