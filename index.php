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
        <div id="namai" class="container section scrollspy">
            <div class="row">
                <div class="col s6">
                    <img class="responsive-img" src="img/23.jpg" alt="">
                </div>
                <div class="col s6">
                    <h1>Nuotykis</h1>
                    <p>Tai mano svajonė keliauti po pasaulį.</p>
                    <p>Gyvenimas yra nuotykis, dalyvauk jame.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, recusandae!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section (skyrius): Paieška (Search) 
        1. Forms (formos) -> autocomplete (automatinis) 
        2. HTML <input> placeholder Attribute w3schools.com (HTML <input> vietos rezervavimo ženklas atributas) -->

    <section>
        <div id="paieska" class="container section scrollspy">
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
        <div id="populiaros" class="container section scrollspy">
            <h5 class="center">
                <span class="green-text darken-4">Populiaros vietos</span>
            </h5>
            <div style="background-color: greenyellow; text-align: center;">
                <div class="row">
                    <div class="col s4 s1">
                        <div class="card-panel blue lighten-4">
                            <h3>Ispanija</h3>
                            <img class="responsive-img" src="img/32.jpg" alt="">
                            <a class="btn orange" href="atrasti.php">Atrasti</a>
                        </div>
                    </div>
                    <div class="col s4 s1">
                        <div class="card-panel blue lighten-4">
                            <h3>Italija</h3>
                            <img class="responsive-img" src="img/43.jpg" alt="">
                            <a class="btn orange" href="atrasti.php">Atrasti</a>
                        </div>
                    </div>
                    <div class="col s4 s1">
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
        1.  -->

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
                            <a href="#">
                                <img class="fonas" src="img/facebook.png" alt="">
                            </a>
                            <a href="#">
                                <img class="fonas" src="img/instagram.png" alt="">
                            </a>
                            <a href="#">
                                <img class="fonas" src="img/search.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section (skyrius): Gallery (galerija) 
        1. JavaScript -> Media (žiniasklaida) -->

    <footer>
        <div id="galerija" class="container footer scrollspy">
            <h5 class="center">
                <span class="indigo-text darken-4">Foto Galerija</span>
            </h5>
            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?beach" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?travel" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?nature" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?beach,travel" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?water" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?building" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?trees" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?cruise" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?beaches" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?traveling" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?bridge" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/user/erondu/1600x900/?beach,travel,boat" alt="">
                </div>
            </div>
        </div>
    </footer>

    <!-- Section (skyrius): Kontaktai (Contact) -->




    <!-- JavaScript korpuso gale, kad būtų galima optimaliai pakrauti (JavaScript at end of body for optimized loading) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/script.js"></script>

</body>

</html>