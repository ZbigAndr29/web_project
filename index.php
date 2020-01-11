<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projektinis darbas</title>

    <!-- Importuoti (import) materialize.css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles/style.css">

    <!-- Importuoti (import) Google libraries Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="fonas1"></div>

        <!-- Section (skyrius):
        1. Components (komponentai) -> Navbar (naršymo juosta) -> Mobile Collapse Button (Mobilusis sutraukimo mygtukas); -->

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

    <!-- Section (skyrius): 
        1.CSS -> grid (tinklelis) -> indroduction (įvadas) -->
    <section>
        <div id="namai" class="container scrollspy">
            <div class="row">
                <div class="col s6">
                    <img class="responsive-img" src="img/23.jpg" alt="">
                </div>
                <div class="col s6">
                    <h1>Nuotykis</h1>
                    <p>Tai mano svajonė keliauti po pasaulį.</p>
                    <p>Gyvenimas yra nuotykis, dalyvauk jame.</p>
                    <p>Ilgai svajojate apie atpalaiduojantį poilsį balto smėlio paplūdimiuose besimėgaujant karštomis saulės voniomis ir vaizdu į spindinčią jūrą.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section (skyrius): Paieška (Search) 
        1. Forms (formos) -> Autocomplete (automatinis) -> Initialization (inicijavimas) -> Option (parinkti)
        -> Data (Duomenų objektas apibrėžia automatinio užbaigimo parinktis su pasirinktomis piktogramų eilutėmis)pvz. data: {
            "Apple": null,
            "Microsoft": null,
            "Google": null, 
        } -->

    <section>
        <div id="paieska" class="container scrollspy">
            <div style="background-color: red; color: #fff; text-align: center;">
                <div class="row">
                    <div class="col s12">
                        <h2>Paieška</h2>
                        <div class="input-field col s12">
                            <input type="text" id="autocomplete-input" class="autocomplete white grey-text" placeholder="Ispanija, Italija, Turkija, kiti...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- section (skyrius): Popular Places (Populiaros vietos)
        1. CSS -> Grid (tinklelis) -> indroduction (įvadas) ...; 
        2. Components (komponentai) -> cards (korteles) -> image card (vaizdo kortele) ...; 
        3. CSS -> Grid (tinklelis) -> Example Promotion Table (Skatinimo lentelės pavyzdys) ... -->

    <section>
        <div id="populiaros" class="container scrollspy">
            <h5 class="center">
                <span class="green-text darken-4">Populiaros vietos</span>
            </h5>
            <div style="background-color: greenyellow; text-align: center;">
                <div class="row">
                    <div class="col s4">
                        <div class="card-panel blue lighten-4">
                            <h3>Ispanija</h3>
                            <img class="responsive-img" src="img/32.jpg" alt="">
                            <a class="btn orange waves-effect waves-light" href="atrasti.php">Atrasti</a>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card-panel blue lighten-4">
                            <h3>Italija</h3>
                            <img class="responsive-img" src="img/43.jpg" alt="">
                            <a class="btn orange" href="atrasti.php">Atrasti</a>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card-panel blue lighten-4">
                            <h3>Turkija</h3>
                            <img class="responsive-img" src="img/53.jpg" alt="">
                            <a class="btn orange" href="atrasti.php">Atrasti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section (skyrius):
        1. Components (komponentai) -> Cards (korteles) -> Image Cards (vaizdo korteles)
        Čia yra standartinė kortelė su vaizdo miniatiūra  -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/3.jpg" alt="">
                            <span class="card-title">Port Aventura atrakcionių parkas</span>
                        </div>
                        <div class="card-content">"PortAventura" parkas nėra labai panašus į jūsų įprastą, bėgimo
                            pramogų parką. Viduje ši graži erdvė yra šeši unikalūs tema žemių, kiekvienas
                            pademonstruotų ypač civilizacijos. Šios tematikos srityje apima tolimųjų Vakarų, Sesamo
                            Aventura, Mediterrania, Polinezijos, Meksikos ir Kinijos.
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/2.jpg" alt="">
                            <span class="card-title">Kultūra Koliziejus</span>
                        </div>
                        <div class="card-content">Koliziejus dar kitaip vadinamas Flavijaus amfiteatras –
                            didžiausias ir seniausias pasaulyje amfiteatras, esantis Romoje, Italijoje. Garsėjo
                            gladiatorių kovomis tarpusavyje ir prieš laukinius gyvūnus.
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/4.jpg" alt="">
                            <span class="card-title">Sagrada Familia bažnyčia</span>
                        </div>
                        <div class="card-content">Sagrada Familia bažnyčia – tai simbolinis Barselonos pastatas,
                            kurį taip pat suprojektavo Antoni Gaudí. Nors vienas bažnyčios šonas yra nebaigtas,
                            tačiau pastatas priklauso UNESCO saugomų objektų sąrašui.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Follow (sekite) -->

    <section>
        <div class="container">
            <div style="background-color: blueviolet; color: #fff; text-align: center;">
                <div class="row">
                    <div class="col s12">
                        <h4>Follow Geriausio kelionės</h4>
                        <p>Sekite mus socialiniuose tinkluose specialiems pasiūlymams</p>
                        <div class="card-image">
                            <a href="https://facebook.com">
                                <img class="fonas" src="img/facebook.png" alt="">
                            </a>
                            <a href="https://instagram.com">
                                <img class="fonas" src="img/instagram.png" alt="">
                            </a>
                            <a href="https://google.lt">
                                <img class="fonas" src="img/search.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section (skyrius): Gallery (galerija) 
        1. JavaScript -> Media (žiniasklaida) -> Material Box 
        Sukurti pirmiau vaizdas su efektas yra taip paprasta, kaip pridėti medžiaga tiktas klasę vaizdo žyma -->

    <footer>
        <div id="galerija" class="container footer">
            <h5 class="center">
                <span class="indigo-text darken-4">Foto Galerija</span>
            </h5>
            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/beach.jpg" alt="">
                    <span class="grey-text darken-1">Paplūdimys</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/travel.jpg" alt="">
                    <span class="grey-text darken-1">Kelionė</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/nature.jpg" alt="">
                    <span class="grey-text darken-1">Gamta</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/beach-travel.jpg" alt="">
                    <span class="grey-text darken-1">Kelionės paplūdimiu</span>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/water.jpg" alt="">
                    <span class="grey-text darken-1">Vanduo</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/buildings.jpg" alt="">
                    <span class="grey-text darken-1">Pastatai</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/trees.jpg" alt="">
                    <span class="grey-text darken-1">Medžiai</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/cruise.jpg" alt="">
                    <span class="grey-text darken-1">Kruizas</span>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/beaches.jpg" alt="">
                    <span class="grey-text darken-1">Paplūdimiai</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/traveling.jpg" alt="">
                    <span class="grey-text darken-1">Kelionės</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/bridge.jpg" alt="">
                    <span class="grey-text darken-1">Tiltas</span>
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="img/beach-travel-boat.jpg" alt="">
                    <span class="grey-text darken-1">Plaukimas paplūdimiu</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Section (skyrius): Kontaktai (Contact) 
        1. CSS -> Grid -> Introduction;
        2. Forms -> Text Inputs -> Icon Prefixes, Textarea;
        3. W3. CSS Panels (w3schools.com) -->

    <footer>
        <div id="kontaktai" class="container scrollspy">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card-panel center blue-grey lighten-4" style="height: 100%;">
                        <i class="large material-icons">email</i>
                        <h4>Kontaktai</h4>
                        <p>Nepraleisk progos gauti pigiausius pasiūlymus, naujienas ir patarimus</p>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card-panel center blue-grey lighten-4" style="height: 100%;">
                        <form>
                            <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Vardas</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_email" type="text" class="validate">
                                <label for="icon_email">El. paštas</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Įveskite pranešimą</label>
                            </div>
                            <p><button class="waves-effect waves-light btn" name="submit" type="submit" id="contact-submit">Siųsti</button></p>
                        </form>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18449.493463506984!2d25.252953605163764!3d54.68874243804504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd940f28c9f5ef%3A0x436260edb229adee!2sCentras%2C%20Vilnius%2001107!5e0!3m2!1slt!2slt!4v1578581909218!5m2!1slt!2slt" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </footer>

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