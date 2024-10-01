<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API's</title>
</head>
<body>
    <h1>API's</h1>
    <h2>Exibe itens </h2>

    <!--Div para exibir os dados que vira da API-->
    <div id="dados-api"></div>
    <hr>

    <form id="addFriends">
        <p>
            <label>Nome</label><br>
            <input type="text" id="name" name="name">
        </p>
        <p>
            <label>Idade</label><br>
            <input type="text" id="age" name="age">
        </p>
        <p>
            <button type="submit" id="add-friends">Adicionar</button>
        </p>
    </form>

    <script src="assets/js/api.session.js"></script>
</body>
</html>