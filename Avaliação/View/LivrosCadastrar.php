<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cadrastro</title>
</head>
<body>
    <a href="/PB_PHP/Avalição/Livros/listar">Ir para a tela Listar</a>
    <form method="POST" action= "salvar">
        <input type="text" name="titulo" placeholder="titulo do Livros" require>
        <input type="text" name="autor" placeholder="autor do Livros" require>
        <input type="text" name="editora" placeholder="editora " require>
        <input type="date" name="ano" placeholder="ano " require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>