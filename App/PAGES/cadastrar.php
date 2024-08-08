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
                <label for="nome-pizza">Nome da Pizza:</label>
                <input type="text" name="nomePizza" id="nome-pizza">
            </div>
            <div class="form-item">
                <label for="valor-pizza">Valor R$:</label>
                <input type="text" name="valorPizza" id="valor-pizza">
            </div>
            <div class="form-item">
                <label for="tamanho-pizza">Tamanho:</label>
                <input type="text" name="tamanhoPizza" id="tamanho-pizza">
            </div>
            <div class="form-item">
                <label for="descricao-pizza">Descrição:</label>
                <textarea name="descricaoPizza" id="descricao" cols="50" rows="10"></textarea>
            </div>
            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </main>    
</body>
</html>