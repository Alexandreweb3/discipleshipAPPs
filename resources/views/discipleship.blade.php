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

        nav.filter {
            position: absolute;
            top: 120px;
            right: 95px;

        }

        nav.filter-section {
            padding: 4px;
            border-radius: 4px;
        }

        nav.filter select {
            padding: 4px;
            background-color: #000000;
            color: #fff;
            border-radius: 4px;
        }

        nav.filter select option:hover {
            background-color: #000000;
        }
    </style>
</head>

<body>
    <section>
        <header>
            <a href="{{ route('index') }}"><img src="\storage\logoievv.png" alt="" class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('perfil') }}">Perfil</a></li>
                    <li><a href="{{ route('index') }}">Sair</a></li>
                </ul>
            </nav>
        </header>

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
</body>

</html>