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
        padding: 100px 20px; 
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #121212;
        overflow: hidden;
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
        max-width: 400px;
        padding: 40px;
        border-radius: 8px;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px; 
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
        width: calc(100% - 20px); /* Ajuste de largura para considerar o padding do container */
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        /* Removido border-radius para deixar o formulário retangular */
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
        /* Removido border-radius para deixar o formulário retangular */
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .map-container {
        max-width: 800px; /* Alterado para 800 pixels */
        height: 300px;
        border-radius: 5px;
        overflow: hidden;
    }

    .map {
        width: 100%; /* Largura do mapa definida como 100% para ocupar todo o espaço disponível */
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
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.2496327482673!2d-34.83898968518092!3d-7.090869694890783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd0c649271d9%3A0x677e64d27ff09b8a!2sIgreja%20Verbo%20da%20Vida%20-%20Praia!5e0!3m2!1sen!2sbr!4v1644428153245!5m2!1sen!2sbr" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

</body>

</html>
