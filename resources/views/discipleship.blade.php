<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discipulado / Aulas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #121212;
            color: #FCDC13;
            padding: 0;
            margin: 0;
        }

        section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 100px;
            min-height: 100vh;
            box-sizing: border-box;
        }

        header {
            width: 100%;
            padding: 40px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #121212;
            z-index: 1000;
        }

        header .logo {
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
            color: #FCDC13;
            font-weight: 500;
            text-decoration: none;
            font-size: 19px;
            margin-left: 100px;
        }

        header .navegation li a:hover {
            color: #fff;
        }

        nav.filter {
            position: absolute;
            top: 120px;
            right: 95px;
            z-index: 1000;
        }

        nav.filter select {
            padding: 8px;
            background-color: #000000;
            color: #FCDC13;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        nav.filter select option:hover {
            background-color: #333333;
        }

        .myclasses {
            display: flex;
            align-items: flex-start;
            margin-top: 180px; /* Ajustado margem superior maior */
        }

        .myclasses iframe {
            width: 50%; /* Largura do iframe */
            height: 350px; /* Altura fixa para manter proporções do vídeo */
            border: none;
        }

        .myclasses .text-content {
            flex: 1;
            padding: 0 20px; /* Espaçamento entre o iframe e o texto */
        }

        .myclasses h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .myclasses p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .deliveringsummary {
            text-align: center;
            padding: 50px;
            background-color: #121212;
            margin-top: 20px; /* Espaçamento entre a seção anterior e esta */
        }

        .deliveringsummary h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .deliveringsummary p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <header>
        <a href="{{ route('index') }}"><img src="\storage\logoievv.png" alt="" class="logo"></a>
        <nav class="navegation">
            <ul>
                <li><a href="{{ route('perfil') }}">Perfil</a></li>
                <li><a href="{{ route('index') }}">Sair</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="myclasses">
            <iframe width="500" height="350" src="https://www.youtube.com/embed/TVTjeo97b7I" frameborder="0" allowfullscreen></iframe>
            <div class="text-content">
                <h1>DÍZIMOS E OFERTAS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit dolores necessitatibus odio vitae corrupti fugiat, ipsum sit nihil accusantium possimus tempore magni saepe laborum, id provident minima? Eveniet, vero!</p>
            </div>
        </div>

        <nav class="filter">
            <select id="categoria">
                <option value="Integridade-da-Palavra">Integridade da Palavra</option>
                <option value="Arrependimento-de-obras-mortas">Arrependimento de obras mortas</option>
                <option value="Fundamentos-da-Fe">Fundamentos da Fé </option>
                <option value="Imposição-de-mãos">Imposição de mãos </option>
                <option value="Ressurreição-dos-mortos">Ressurreição dos mortos</option>
                <option value="Batismos">Batismos</option>
                <option value="Dízimos-e-ofertas">Dízimos e ofertas</option>
                <option value="Comunhão-com-Deus-e-com-a-Igreja">Comunhão com Deus e com a Igreja</option>
                <option value="Governo-da-Igreja">Governo da Igreja</option>
                <option value="Envolva-se">Envolva-se</option>
            </select>
        </nav>
    </section>

    <nav class="deliveringsummary">
        <h1>FINALIZOU?</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, laboriosam. Perspiciatis qui quam ducimus modi soluta, velit, aperiam aliquid dolore libero corporis ad aspernatur voluptatum. Dicta dolore eius deserunt alias.</p>
    </nav>

</body>

</html>
