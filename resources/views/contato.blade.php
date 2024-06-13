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
    align-items: center;
    justify-content: space-between;
}

.content .text a {
    display: inline-block;
    margin-top: 50px;
    padding: 10px 25px;
    background: #FCDC13;
    color: #fff;
    font-weight: 500;
    letter-spacing: 1px;
    text-decoration: none;
    border-radius: 40px;
    transition: 0.3s ease-in-out;
}

.content .text a:hover {
    transform: translateY(-10px);
}

</style>

<body>
    <section>
        <header>
            <a href="{{ route('index') }}"><img src="/storage/logoievv.png" alt="" class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('contato') }}">Quem somos</a></li>
                    <li><a href="{{ route('location') }}">Localização</a></li>
                    <li><a href="{{ route('login.index') }}">Login</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <div class="text">
                <h2>Quem<br><span>Somos?</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit veniam amet facere porro pariatur, ad omnis odit nemo explicabo expedita eius aspernatur harum, dignissimos fuga? Vero, quas dolorem. Est, assumenda!</p>

            </div>
        </div>
    </section>
</body>

</html>