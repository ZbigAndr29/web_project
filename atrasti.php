<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atrasti</title>

    <!-- Importuoti (import) materialize.css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles/style.css">

    <!-- Importuoti (import) Google libraries Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

    <!-- Section (skyrius): 
        1. Components (komponentai) -> Navbar (naršymo juosta) -> Mobile Collapse Button (Mobilusis sutraukimo mygtukas); -->

    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Geriausio Kelionės</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#namai">Namai</a></li>
                    <li><a href="#paieska">Paieška</a></li>
                    <li><a href="#populiaros">Populiaros vietos</a></li>
                    <li><a href="#galerija">Galerija</a></li>
                    <li><a href="#kontaktai">Kontaktai</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="#namai">Namai</a></li>
            <li><a href="#paieska">Paieška</a></li>
            <li><a href="#populiaros">Populiaros vietos</a></li>
            <li><a href="#galerija">Galerija</a></li>
            <li><a href="#kontaktai">Kontaktai</a></li>
        </ul>
    </header>



    <!-- Section (skyrius): Ispanija -->

    <h1 class="center-align">
        <span class="orange-text darken-1">Ispanija</span>
    </h1>

    <header>
        <div class="konteineris container">
            <div class="eile row">
                <div class="col s6" style="height: 100%;">
                    <img class="responsive-img" src="https://source.unsplash.com/user/erondu/1500x900/?barcelona" alt="">
                </div>
                <div class="col s6" style="height: 100%;">
                    <h2 class="tekstas">Barselona, Ispanija</h2>
                    <p>Vasaros kelionė į temperamentingąją Ispaniją!</p>
                    <p>Barselona – tai miestas Ispanijoje, kurio gatvėmis kiekvieną savaitę pražygiuoja daugiau nei milijonas turistų iš viso pasaulio; tai Katalonijos sostinė, kurioje yra įsikūrę 7 gražiausi Europos paplūdimiai; tai vieta, kuriai pamatus padėjo garsusis pusiau dievas, pusiau žmogus – Heraklis. Galiausiai – turistinis traukos centras, kurį turėtų aplankyti kiekvienas, kuris yra išsiilgęs saulės, aitrių kvapų ir flamingo taktų.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Section (skyrius):
        1. Components -> Footer (poraštės) -->

    <main class="page-footer">
        <div class="siena container">
            <div class="eilute row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>



    <!-- JavaScript korpuso gale, kad būtų galima optimaliai pakrauti (JavaScript at end of body for optimized loading) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/script.js"></script>

</body>

</html>