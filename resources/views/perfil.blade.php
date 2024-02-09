<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Perfil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Criar Perfil</h1>
    <form id="perfilForm" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*"><br><br>

        <input type="submit" value="Criar Perfil">
    </form>

    <div id="resultado"></div>

    <script src="script.js"></script>
</body>
</html>
