<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="icon" href="/imgs/favicon.ico" />

    <title>Serri - Découvrez l'avenir de l'agriculture grâce à nos solutions agrotechniques innovantes.</title>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.serri.co">
    <meta property="og:title" content="Serri - Découvrez l'avenir de l'agriculture grâce à nos solutions agrotechniques innovantes.">
    <meta property="og:description" content="Efficacité et durabilité à portée de main grâce à nos solutions agrotechniques avancées.">
    <meta property="og:image" content="">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.serri.co">
    <meta property="twitter:title" content="Serri - Automatise votre ferme en inventant l'agriculture de demain">
    <meta property="twitter:description" content="Efficacité et durabilité à portée de main grâce à nos solutions agrotechniques avancées.">
    <meta property="twitter:image" content="">

    <link rel="stylesheet" href="/css/default.css">

    @vite('resources/js/app.js')
</head>

<body class="bg-slate-100">
    <div class="fixed top-0 left-0 right-0 bottom-0 bg-white z-30" id="loader">
        <div class="relative h-screen">
            <div class="flex items-center justify-center ringer">
                <img src="/imgs/favicon.png" alt="" width="60px" height="90px">
                <span></span>
            </div>
        </div>
    </div>
    <div id="app"></div>
    <script>
        window.addEventListener('load', (event) => {

            document.querySelector('#loader').style.display = "none";

        });
    </script>
</body>

</html>