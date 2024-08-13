<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Pizza</title>
</head>
<body>
    <main>
        <form action="./cadastrar_action.php" method="post">
            <div class="form-item">
                <label for="nomePizza">Nome da Pizza:</label>
                <input type="text" name="nomePizza" id="nomePizza">
            </div>
            <div class="form-item">
                <label for="valorPizza">Valor R$:</label>
                <input type="text" name="valorPizza" id="valorPizza">
            </div>
            <div class="form-item">
                <label for="tamanhoPizza">Tamanho:</label>
                <input type="text" name="tamanhoPizza" id="tamanhoPizza">
            </div>
            <div class="form-item">
                <label for="descricaoPizza">Descrição:</label>
                <textarea name="descricaoPizza" id="descricaoPizza" cols="50" rows="10"></textarea>
            </div>
            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </main>    
</body>
</html>