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
                    <img class="responsive-img" src="img/barcelona.jpg" alt="">
                </div>
                <div class="col s6" style="height: 100%;">
                    <h2 class="tekstas">Barselona, Ispanija</h2>
                    <p>Vasaros kelionė į temperamentingąją Ispaniją!</p>
                    <p>Barselona – tai miestas Ispanijoje, kurio gatvėmis kiekvieną savaitę pražygiuoja daugiau nei milijonas turistų iš viso pasaulio; tai Katalonijos sostinė, kurioje yra įsikūrę 7 gražiausi Europos paplūdimiai; tai vieta, kuriai pamatus padėjo garsusis pusiau dievas, pusiau žmogus – Heraklis. Galiausiai – turistinis traukos centras, kurį turėtų aplankyti kiekvienas, kuris yra išsiilgęs saulės, aitrių kvapų ir flamingo taktų.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Section (skyrius): apie Viešbutis Nr. 1
        1. Components -> Footer (poraštės) 
        2. Components -> Icons (piktogramos) -->

    <main class="page-footer">
        <div class="siena container">
            <div class="eilute row">
                <div class="col l6">
                    <img class="responsive-img" src="img/viesbutis1.jpg" alt="">
                </div>
                <div class="col l4 offset-l2">
                    <h5 class="white-text">U232 Hotel</h5>
                    <ul>
                        <li><a class="zvaigzdes" href="#!">
                                <i class="small material-icons">star</i>
                                <i class="small material-icons">star</i>
                                <i class="small material-icons">star</i>
                                <i class="small material-icons">star</i>
                            </a>
                        </li>
                        <li><i class="small material-icons">filter_9</i>
                            <a class="grey-text text-lighten-3" href="#!">Labai gerai</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="#!">"Nuostabi vieta", "Fantastiška paslauga"</a></li>
                        <li><i class="small material-icons">star</i>
                            <a class="grey-text text-lighten-3" href="#!">WiFi</a>
                            <i class="small material-icons">ac_unit</i>
                            <a class="grey-text text-lighten-3" href="#!">Oro kondicionavimas</a>
                            <i class="small material-icons">local_parking</i>
                            <a class="grey-text text-lighten-3" href="#!">Automobilių stovėjimo aikštelė</a>
                        </li>
                        <a href="https://www.skyscanner.net/hotels/spain/barcelona-hotels/u232-hotel/ht-46939817?checkin=2020-01-21&checkout=2020-01-22&rooms=1&adults=2&clicked_details_funnel=meta&clicked_details_partner=h_ck&clicked_details_price=70&currency=EUR&locale=en-GB&market=LT&search_cycle_id=3a9dab37a1e38559b24886a9f057795c5230e5a245186b4a2f49749924e38477&search_entity_id=27548283"><button class="waves-effect waves-light orange btn" id="contact-submit">Žiūrėti detales</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </main>


    <!-- Section (skyrius): apie Viešbutis Nr. 2
        1. Components -> Footer (poraštės) 
        2. Components -> Icons (piktogramos) -->

        <main class="paveikslas page-footer">
        <div class="siena2 container">
            <div class="eilute2 row">
                <div class="col l6">
                    <img class="responsive-img" src="img/viesbutis2.jpg" alt="">
                </div>
                <div class="col l4 offset-l2">
                    <h5 class="white-text">Aparthotel Mariano Cubi Barcelona</h5>
                    <ul>
                        <li><a class="zvaigzdes" href="#!">
                                <i class="small material-icons">star</i>
                                <i class="small material-icons">star</i>
                                <i class="small material-icons">star</i>
                                <i class="small material-icons">star</i>
                            </a>
                        </li>
                        <li><i class="small material-icons">filter_8</i>
                            <a class="grey-text text-lighten-3" href="#!">Labai gerai</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="#!">"Puikus kambarys", "Nuostabi vieta"</a></li>
                        <li><i class="small material-icons">star</i>
                            <a class="grey-text text-lighten-3" href="#!">WiFi</a>
                            <i class="small material-icons">ac_unit</i>
                            <a class="grey-text text-lighten-3" href="#!">Oro kondicionavimas</a>
                            <i class="small material-icons">directions_bus</i>
                            <a class="grey-text text-lighten-3" href="#!">Pervežimas iš/į oro uostą</a>
                        </li>
                        <a href="https://www.skyscanner.net/hotels/spain/barcelona-hotels/aparthotel-mariano-cubi-barcelona/ht-47050380?checkin=2020-01-21&checkout=2020-01-22&rooms=1&adults=2&clicked_details_funnel=meta&clicked_details_partner=h_bc&clicked_details_price=54&currency=EUR&locale=en-GB&market=LT&search_cycle_id=3a9dab37a1e38559b24886a9f057795c5230e5a245186b4a2f49749924e38477&search_entity_id=27548283"><button class="waves-effect waves-light green btn" id="contact-submit">Žiūrėti detales</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- Section (skyrius): apie Viešbutis Nr. 3
        1. Components -> Footer (poraštės) 
        2. Components -> Icons (piktogramos) -->

        <main class="paveikslas2 page-footer">
        <div class="siena3 container">
            <div class="eilute3 row">
                <div class="col l6">
                    <img class="responsive-img" src="img/viesbutis3.jpg" alt="">
                </div>
                <div class="col l4 offset-l2">
                    <h5 class="white-text">Sunotel Aston</h5>
                    <ul>
                        <li><a class="zvaigzdes" href="#!">
                                <i class="small material-icons">star</i>
                                <i class="small material-icons">star</i>
                                <i class="small material-icons">star</i>
                            </a>
                        </li>
                        <li><i class="small material-icons">filter_7</i>
                            <a class="grey-text text-lighten-3" href="#!">Gerai</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="#!">"Nuostabi vieta", "Skanūs pusryčiai"</a></li>
                        <li><i class="small material-icons">star</i>
                            <a class="grey-text text-lighten-3" href="#!">WiFi</a>
                            <i class="small material-icons">local_parking</i>
                            <a class="grey-text text-lighten-3" href="#!">Automobilių stovėjimo aikštelė</a>
                            <i class="small material-icons">hotel</i>
                            <a class="grey-text text-lighten-3" href="#!">Registratūra dirba 24 valandas</a>
                        </li>
                        <a href="https://www.skyscanner.net/hotels/spain/barcelona-hotels/sunotel-aston/ht-46963623?checkin=2020-01-21&checkout=2020-01-22&rooms=1&adults=2&clicked_details_funnel=dbook&clicked_details_partner=d_ct&clicked_details_price=34&currency=EUR&locale=en-GB&market=LT&search_cycle_id=78785048795bf8c74af8588573d5b48f9668d9ef6a61e42d4de534008639a0bf&search_entity_id=117339437"><button class="waves-effect waves-light red btn" id="contact-submit">Žiūrėti detales</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </main>


    <!-- Section (skyrius): Visos teises saugomos -->

    <footer>
        <div class="container center">
            <p class="copyright">© 2020. Visos teisės saugomos.</p>
        </div>
    </footer>



    <!-- JavaScript korpuso gale, kad būtų galima optimaliai pakrauti (JavaScript at end of body for optimized loading) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/script.js"></script>

</body>

</html>