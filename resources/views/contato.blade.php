<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
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

    .circle {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .circle img {
        position: absolute;
        bottom: 0;
        right: 0;
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    header .logo {
        position: relative;
        max-width: 150px;
    }

    header .navegation ul {
        position: relative;
        display: flex;
    }

    header .navegation li {
        list-style: none;
    }

    header .navegation li a {
        display: inline-block;
        color: #ffffff;
        font-weight: 500;
        text-decoration: none;
        font-size: 16px;
        margin-left: 20px;
        transition: color 0.3s ease-in-out;
    }

    header .navegation li a:hover {
        color: #0D4DC7;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        margin-top: 0;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    textarea {
        height: 100px;
    }

    input[type="submit"] {
        background-color: #0D4DC7;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .map-container {
        width: 100%;
        height: 300px;
        border-radius: 5px;
        overflow: hidden;
        margin-top: 20px;
    }

    .map {
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <section>
        <header>
            <a href={{ route('index') }}><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('contato') }}">Contatos</a></li>
                    <li><a href="{{ route('location') }}">Localização</a></li>
                    <li><a href="{{ route('index') }}">Sair</a></li>
                </ul>
            </nav>

        </header>
        <div class="container">
            <h2>Entre em Contato</h2>
            <form action="#" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="number">Telefone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Enviar">
            </form>
        </div>
        <div class="map-container">
            <iframe class="map" src="https://www.google.com.br/maps/place/Igreja+Verbo+da+Vida+-+Praia/@-7.0908644,-34.8403559,17z/data=!4m14!1m7!3m6!1s0x7acdd0c649271d9:0x677e64d27ff09b8a!2sIgreja+Verbo+da+Vida+-+Praia!8m2!3d-7.0908697!4d-34.837781!16s%2Fg%2F12lrlxzbj!3m5!1s0x7acdd0c649271d9:0x677e64d27ff09b8a!8m2!3d-7.0908697!4d-34.837781!16s%2Fg%2F12lrlxzbj?entry=ttu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

</body>

</html>
