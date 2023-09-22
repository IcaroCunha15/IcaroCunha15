<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Perfil</title>
</head>
<body>
    <h1>Exercício 01 - Cadastro de perfis</h1>
    <?php include_once "layouts/nav.php"; ?>

    <fieldset>
        <legend>Perfil</legend>
        <form action="perfilAdd.php" method="post">
            <label for="">Nome</label><br>
            <input 
                type="text" 
                name="nome" 
                placeholder="Informe o nome do perfil." 
                size="50" 
                maxlength="50"
                required  
                autofocus><br><br>
            <input type="submit" value="Salvar" name="btnSalvar">
        </form>
    </fieldset>
</body>
</html>