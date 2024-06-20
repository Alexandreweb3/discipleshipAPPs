<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Discipulado / Meu Perfil</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }


    section {
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #121212;
        overflow: hidden;
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    header .logo {
        position: relative;
        max-width: 150px;
    }

    header .navegation ul {
        display: flex;
        padding: 0;
    }

    header .navegation li {
        list-style: none;
    }

    header .navegation li a {
        display: inline-block;
        color: #fff;
        font-weight: 500;
        text-decoration: none;
        font-size: 19px;
        margin-left: 100px;
    }

    header .navegation li a:hover {
        color: #FCDC13;
    }

</style>

<body>
    <section>
        <header>
            <a href="{{ route('index') }}"><img src="/storage/logoievv.png" alt="" class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('login.index') }}">Aulas</a></li>
                </ul>
            </nav>
        </header>
        </div>
    </section>
    <div class="container">
        <!-- Container para alinhar o conteúdo -->
        <div class="profile-card">
            <!-- Card do perfil -->
            <div class="profile-picture">
                <!-- Foto do perfil (pode ser uma imagem) -->
                <img src="user-profile.jpg" alt="Foto de Perfil">
                <input type="file" id="profile-image" name="profile-image" accept="image/*">
                <!-- Campo para selecionar uma nova foto de perfil -->
            </div>

            <form action="#" method="POST" class="profile-form">
                <!-- Formulário para atualizar informações do perfil -->
                <label for="email">Novo Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Nova Senha:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Confirmar Nova Senha:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <button type="submit">Salvar Alterações</button>
                <!-- Botão para enviar o formulário -->
            </form>
        </div>
    </div>
</body>

</html>