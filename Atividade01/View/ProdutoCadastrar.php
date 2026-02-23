<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cadrastro</title>
</head>
<body>
    <a href="/PB_PHP/Atividade01/Produto/listar">Ir tela Listar</a>
    <form method="POST" action= "salvar">
        <input type="text" name="Nome" placeholder="Nome do produto" require>
        <input type="text" name="Preço" placeholder="Preço do produto" require>
        <input type="number" name="Quantidade" placeholder="Quantidade " require>
        <input type="date" name="Validade" placeholder="Validade " require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>