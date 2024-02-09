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
        background-color: #0166d1;
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

    .left-text p {
        text-align: left;
        margin-bottom: 20px;
        color: #0166d1
    }

    .information {
        text-align: center;
        
    }

    
    .item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
       
    }

    
    .whatsapp-icon {
        margin-right: 10px;
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
    <div class="information">
        <h1>Contatos</h1>
        <br>
        <p>Segunda à Sexta das 8:30 às 12h<br>e das 14h às 17:30.</p>
        <br>
        <br>
        <div class="contact-info">
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-telephone" viewBox="0 0 16 16" style="margin-right: 10px;">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                </svg>
                <a href="tel:+558387874447" style="text-decoration: none; color: inherit;">
                    <p>+55 (83) 98787-4447</p>
                </a>
            </div>
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16" style="margin-right: 10px;">
                    <path
                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                </svg>
                <div>
                    <a href="https://wa.me/5583999144816" style="text-decoration: none; color: inherit;">
                        <p>+55 (83) 99914-4816 (WhatsApp)</p>
                    </a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
