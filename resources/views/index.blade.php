<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.index.css') }}">
    <title>Discipulado - Verbo da Vida</title>
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="index.html"><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contatos.html">Localização</a></li>
                    <li><a href="{{ route('login.index') }}">Login</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <div class="text">
                <h2><br> <span>Discipulado</span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi esse similique dolorum, pariatur, voluptatibus magni dignissimos maiores accusantium eligendi, commodi quaerat eveniet! Consequatur, minima? Voluptas facilis natus provident aliquam? Quisquam?</p>
                

                @section('content')
                    <a href="{{ route('login.index') }}">Login</a>
                @endsection
            </div>
        </div>
    </section>
</body>

</html>
