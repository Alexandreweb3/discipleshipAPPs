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
        padding: 40px 100px;
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

    .content {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        width: 100%;
        margin-top: 120px;
    }

    h1 {
        color: #fff;
    }

    .container {
        display: flex;
        width: 100%;
        justify-content: space-between;
    }

    .half-left {
        width: 60%;
    }

    .half-right {
        width: 40%;
        text-align: center;
        color: #fff;
    }

    .half-right img {
        max-width: 130%;
        height: auto;
    }

    .elements-left {
        color: #fff;
    }

    h1 {
        margin-bottom: 20px;
        color: #fff;
        text-align: center;
    }

    p {
        margin-bottom: 10px;
    }
</style>

<body>
    <section>
        <header>
            <a href="{{ route('index') }}"><img src="/storage/logoievv.png" alt="" class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('location') }}">Localização</a></li>
                    <li><a href="{{ route('login.index') }}">Login</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <div class="container">
                <div class="half-left">
                    <div class="elements-left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15802.36349095657!2d-34.83947299318902!3d-7.090866147687016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd0c649271d9%3A0x677e64d27ff09b8a!2sIgreja%20Verbo%20da%20Vida%20-%20Praia!5e0!3m2!1sen!2sbr!4v1644703156180!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
                <div class="half-right">
                    <br>
                    <h1>Horário dos nossos cultos</h1>
                    <p>Culto de Louvor e Adoração  |  Domingo  | 16 e 18 horas.</p>
                    <br>
                    <p>Culto de Oração  |  Terça-feira  |  20 horas.</p>
                    <br>
                    <p>Culto dos Jovens - Join  |  Sábado (1° e 3° do mês) |  19 horas.</p>
                    <br>
                    <p>R. Herberto Pereira de Lucena, 241Jardim Oceania, João Pessoa - PB, 58037-235</p>
                </div>


            </div>
        </div>
    </section>
</body>

</html>