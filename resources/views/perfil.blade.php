<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Discipulado</title>
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

    .profile-container {
    background-color: #252525;
    border-radius: 8px;
    padding: 40px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    width: 80%; 
    max-width: 800px; 
    text-align: center;
}

.profile-container h2{
    color: #FCDC18;
}

.profile-container {
    background-color: #252525;
    border-radius: 8px;
    padding: 40px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 800px;
    margin: 0 auto; /* Centralizar o container */
}

.form-container {
    width: 100%;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input[type="email"],
.form-group input[type="password"] {
    width: calc(100% - 30px); /* Ajustar a largura dos inputs */
    padding: 15px;
    margin-top: 10px;
    border: none;
    border-radius: 6px;
    background-color: #f5f5f5;
    font-size: 16px;
    color: #333333;
    box-sizing: border-box;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

.update-profile-button {
    width: calc(100% - 30px); /* Ajustar a largura do botão */
    background-color: #FCDC18;
    color: #ffffff;
    border: none;
    padding: 15px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.update-profile-button:hover {
    background-color: #eead2d;
}

.links {
    text-align: center;
    margin-top: 20px;
}

.links a {
    display: block;
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    transition: color 0.3s ease;
    margin-top: 10px;
}

.links a:hover {
    color: #FCDC18;
}

.footer {
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    width: 80%;
    margin: 20px auto;
    color: white;
}

.footer p {
    margin-top: 20px;
    margin-bottom: 20px;
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
        <div class="profile-container">
        <h2>Atualizar Perfil</h2>

        <div class="form-container">
            <form class="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="Novo e-mail">
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Nova Senha">
                </div>
                <div class="form-group">
                    <label for="password_confirmation"></label>
                    <input type="password" id="password_confirmation" placeholder="Confirmar Nova Senha">
                </div>
            </form>
        </div>
        <button type="submit" class="update-profile-button">Atualizar Perfil</button>

        <div class="links">
        <a href="{{ route('index') }}" class="logout">Sair</a>
        </div>
    </div>

    <div class="footer">
        <p>© 2024 Discipulado Verbo da Vida Praia</p>
    </div>
</body>

</body>

</html>