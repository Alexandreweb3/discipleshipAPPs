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
        background-color: black; 
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
    input[type="tel"],
    textarea {
        width: calc(100% - 20px); 
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        resize: none;
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
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0166d1;
    }

    .map-container {
        max-width: 1000px; 
        height: 500px;
        border-radius: 5px;
        overflow: hidden;
    }

    .map {
        width: 100%; 
        height: 100%;
    }
    .left-text p{
    text-align: left; 
    margin-bottom: 20px; 
    color: #0166d1
}
</style>

<body>
    <section>
        <header>
            <a href={{ route('index') }}><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('contato') }}">Contatos</a></li>
                    <li><a href="{{ route('location') }}">Localização</a></li>
                    <li><a href="{{ route('index') }}">Sair</a></li>
                </ul>
            </nav>
        </header>
        <div class="left-text">
            <p>PRECISA DE ASSISTÊNCIA? ESTAMOS AQUI PARA TE AJUDAR! ENTRAREMOS EM CONTATO EM BREVE.</p>
        </div>    
        <div class="container">
            <h2>Preencha o Formulário</h2>
            <br>
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
    </section>

</body>

</html>
