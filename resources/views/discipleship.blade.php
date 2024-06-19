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
            background-color: #121212;
            z-index: 1000;
            top: 0;
            left: 0;
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
            margin-top: 15px;
            padding-top: 20px;
            background-color: #121212;
            color: #FCDC13;
            width: 100%;
            box-sizing: border-box;
            justify-content: center;
            flex-wrap: wrap;
        }

        .myclasses iframe {
            width: 50%;
            height: 350px;
            border: none;
            align-self: flex-start;
        }

        .myclasses .text-content {
            flex: 1;
            padding: 0 20px;
            margin-top: 20px;
            text-align: left;
        }

        .myclasses .text-content h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .myclasses .text-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .deliveringsummary {
            text-align: left;
            padding: 50px;
            background-color: #121212;
            margin-top: 20px;
            color: #FCDC13;
            width: 50%;
        }

        .deliveringsummary h1 {
            font-size: 24px;
            margin-bottom: 20px;

        }

        .deliveringsummary p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #fff;
        }

        .form-container {
            width: 50%;
            background-color: #161616;
            padding: 50px;
            margin-top: 20px;
            color: #FCDC13;

        }

        .form-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-container form {
            display: flex;
            flex-direction: column;

        }

        .form-container label {
            margin-bottom: 10px;
            color: #fff;

        }

        .form-container input,
        .form-container textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #FCDC13;
            background-color: transparent;
            color: #FCDC13;
            border-radius: 4px;
            border-color: #252525;
        }

        .form-container input[type="submit"] {
            background-color: #FCDC13;
            color: #121212;
            border: none;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #FFEEAD;
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
    <section>
        <div class="deliveringsummary">
            <h1>FINALIZOU?</h1>
            <p>Prezado aluno(a), <br>Parabéns por sua dedicação ao finalizar esta aula! Acreditamos que você foi grandemente edificado com o conteúdo apresentado. Caso surjam dúvidas ou se desejar discutir algum aspecto da aula, por favor, preencha o formulário abaixo. Nosso professor estará disponível para ajudá-lo da melhor forma possível.</p>
            <br>
            <p>Lembramos que é obrigatório para alunos que estão repondo aula, anexar um resumo da aula no campo "Anexar arquivo". Certifique-se de que seu resumo seja claro e bem estruturado, com um mínimo de 20 linhas para uma análise adequada.</p>
        </div>

        <div class="form-container">
            <h2>Tire suas dúvidas sobre a aula</h2>
            <form action="#">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <label for="file">Anexar resumo:</label>
                <input type="file" id="file" name="file" accept=".pdf,.doc,.docx" required>
                <small>Formatos permitidos: PDF, DOC, DOCX.</small>
                <br>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
</body>

</html>