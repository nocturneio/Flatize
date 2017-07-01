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
<div class="container">
    <div class="col-12">
        <img src="https://i.imgur.com/U9ARGaH.png">


        <h3 class="mt-5 text-cyan-400"><b>Grid</b></h3>
        <hr>
        <div class="row">
            <h4 class="text-cyan-300">col-1</h4>
			<?php for ($int = 1; $int < 13; $int++) { ?>
                <div class="col-1">
                <div class="green-500 w-100"><h4 class="text-centered text-white circle"><?= $int ?></h4></div>
                </div><?php } ?>
            <!-- Replace because cancer par br -->
            <div class="mt-2">&nbsp;</div>
            <h4 class="text-cyan-300">col-3-sm > only on phone</h4>
			<?php for ($int = 1; $int < 5; $int++) { ?>
                <div class="col-3-sm">
                <div class="red-500 w-100"><h4 class="text-centered text-white circle"><?= $int ?></h4></div>
                </div><?php } ?>
        </div>

        <h3 class="mt-5 text-cyan-400">Image</h3>
        <hr>
        <div class="row">
            <div class="card-panel">
                <h1 class="text-cyan-900">Heading h1</h1>
                <h2 class="text-cyan-900">Heading h2</h2>
                <h3 class="text-cyan-900">Heading h3</h3>
                <h4 class="text-cyan-900">Heading h4</h4>
                <h5 class="text-cyan-900">Heading h5</h5>
                <h6 class="text-cyan-900">Heading h6</h6>

                <h1 class="text-cyan-900 truncate" style="font-size: 250px">Heading h6</h1>
            </div>
        </div>

        <h3 class="mt-5 text-cyan-400">Button</h3>
        <hr>
        <div class="row">
            <a class="button">Test</a>
        </div>

        <h3 class="mt-5 text-cyan-400">Image</h3>
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
