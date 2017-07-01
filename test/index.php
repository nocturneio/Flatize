<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Flatize: A custom CSS Framework made for Flat Design.</title>

    <meta name="theme-color" content="#48cae8">
    <meta name="description" content="A custom CSS Framework made for Flat Design."/>
    <meta name="keywords" content="css, framework, flat, ui, gris, responsive, js, design, web"/>
    <meta name="copyright" content="© Flatize"/>

    <link rel="icon" type="image/png" href="assets/favicon.png"/>
    <link href="assets/flatize.css" rel="stylesheet"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<header>
    <nav class="nav shadow">
        <div class="nav-left">

        </div>
        <span class="nav-toggle"><span></span><span></span><span></span></span>
        <div class="nav-center">
            <a class="nav-logo"><img src="https://i.imgur.com/U9ARGaH.png" alt="Flatize"></a>
        </div>
        <div class="nav-right nav-menu">

        </div>
    </nav>
</header>

<main>
    <section class="hero gradient-cyanToPurple">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Hero title
                </h1>
                <h2 class="subtitle">
                    Hero subtitle
                </h2>
            </div>
        </div>
    </section>
</main>


<div class="container">
    <div class="col-12">
        <h3 class="mt-5 text-blue-700 bold">Grid</h3>
        <hr>
        <blockquote>
            <h4 class="text-l-blue-500 bold">col-xs-3 > On large computer</h4>
            <div class="row">
                <div class="col-xs-4">
                    <div class="box cyan-500 text-white text-centered">
                        1
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="box cyan-500 text-white text-centered">
                        2
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="box cyan-500 text-white text-centered">
                        3
                    </div>
                </div>
            </div>
        </blockquote>

        <h3 class="mt-5 text-blue-700 bold">Image</h3>
        <hr>
        <div class="row">
            <h1 class="text-cyan-900">Heading h1</h1>
            <h2 class="text-cyan-900">Heading h2</h2>
            <h3 class="text-cyan-900">Heading h3</h3>
            <h4 class="text-cyan-900">Heading h4</h4>
            <h5 class="text-cyan-900">Heading h5</h5>
            <h6 class="text-cyan-900">Heading h6</h6>

            <h1 class="text-cyan-900 truncate" style="font-size: 250px">Heading h6</h1>


        </div>

        <h3 class="mt-5 text-blue-700 bold">Button</h3>
        <hr>
        <div class="row">
            <a class="button">Test</a>
            <a class="button green-600 text-white">Test</a>
            <a class="button cyan-400 text-white">Test</a>
        </div>

        <h3 class="mt-5 text-blue-700 bold">Image</h3>
        <hr>
        <div class="row">
            <div class="row">
                <div class="col-6">
                    <h4 class="text-cyan-300">Responsive image (fullwidth)</h4>
                    <img src="https://via.placeholder.com/150x150" class="responsive-img">
                </div>
                <div class="col-6">
                    <h4 class="text-cyan-300">Circle image</h4>
                    <img src="https://via.placeholder.com/150x150" class="circle">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
