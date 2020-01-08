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
        1. Components > Navbar -> Right Aligned Links -->
    
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Ispanija</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html"></a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>
    </header>



    <!-- Section (skyrius): Ispanija -->

    <h1 class="center-align">
        <span class="orange-text darken-1">Ispanija</span>
    </h1>

    <header>
        <div class="konteineris container">
            <div class="eile row">
                <div class="col s6">
                    <img class="responsive-img" src="https://source.unsplash.com/user/erondu/1500x900/?barcelona" alt="">
                </div>
                <div class="col s6">
                    <h2 class="tekstas">Barselona, Ispanija</h2>
                    <p>Vasaros kelionė į temperamentingąją Ispaniją!</p>
                    <p>Barselona – tai miestas Ispanijoje, kurio gatvėmis kiekvieną savaitę pražygiuoja daugiau nei milijonas turistų iš viso pasaulio; tai Katalonijos sostinė, kurioje yra įsikūrę 7 gražiausi Europos paplūdimiai; tai vieta, kuriai pamatus padėjo garsusis pusiau dievas, pusiau žmogus – Heraklis. Galiausiai – turistinis traukos centras, kurį turėtų aplankyti kiekvienas, kuris yra išsiilgęs saulės, aitrių kvapų ir flamingo taktų.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Section (skyrius):
        1. Components -> Footer (poraštės) -->

    <header class="page-footer">
        <div class="container">
            <div class="row">
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
    </header>



    <!-- JavaScript korpuso gale, kad būtų galima optimaliai pakrauti (JavaScript at end of body for optimized loading) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/script.js"></script>

</body>

</html>