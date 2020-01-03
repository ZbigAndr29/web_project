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
    <div style="
        background-image: url(img/foto1.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center center;
        "></div>
    <!-- <img class="responsive-img" src="img/foto1.jpg" alt=""> -->
    <div class="container">
        <!-- <div class="row"></div> -->
    </div>

    <!-- Section (skyrius):
        1. Components (komponentai) -> Navbar (naršymo juosta) -> Right Aligned Links (dešinė lygiuota nuorodos); 
        2. Components (komponentai) -> Navbar (naršymo juosta) -> Mobile Collapse Button (Mobilusis sutraukimo mygtukas); -->

    <nav class="blue">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Geriausio Kelionės</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="namai">Namai</a></li>
                <li><a href="paieška">Paieška</a></li>
                <li><a href="populiaros">Populiaros vietos</a></li>
                <li><a href="galerija">Galerija</a></li>
                <li><a href="kontaktai">Kontaktai</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="namai">Namai</a></li>
        <li><a href="paieška">Paieška</a></li>
        <li><a href="populiaros">Populiaros vietos</a></li>
        <li><a href="galerija">Galerija</a></li>
        <li><a href="kontaktai">Kontaktai</a></li>
    </ul>

    <!-- Section (skyrius): 
        1.CSS grid indroduction (css tinklelio įvedimas) -->

    <div class="container">
        <div class="row">
            <div class="col s6">
                <img class="responsive-img" src="img/23.jpg" alt="">
            </div>
            <div class="col s6">
                <h1>Atrasti</h1>
                <p>Tai mano svajonė keliauti po pasaulį.</p>
                <p>Gyvenimas yra nuotykis, dalyvauk jame.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, recusandae!</p>
            </div>
        </div>
    </div>

    <!-- Section (skyrius): Paieška (Search) 
    1. Forms (formos) -> autocomplete (automatinis) 
    2. HTML <input> placeholder Attribute w3schools.com (HTML <input> vietos rezervavimo ženklas atributas) -->

    <section id="paieska" class="section section-paieska red darken-1 white-text center scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <!-- <div class="row"> -->
                        <h2>Paieška</h2>
                        <div class="input-field col s12">
                            <input type="text" id="autocomplete-input" class="autocomplete white grey-text" placeholder="Ispanija, Italija, Turkija, kiti...">
                            <!-- <label for="autocomplete-input">Ispanija, Italija, Turkija, kiti...</label> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section (skyrius): 
        1. CSS -> Grid (tinklelis) -> indroduction (įvadas) ...; 
        2. Components (komponentai) -> cards (korteles) -> image card (vaizdo kortele) ...; 
        3. CSS -> Grid (tinklelis) -> Example Promotion Table (Skatinimo lentelės pavyzdys) ... -->

    <section class="section section-icons yellow lighten-3 center">
        <div class="container">
            <div class="row">
                <div class="col s3 s1">
                    <div class="card-panel blue lighten-4">
                        <h3>Ispanija</h3>
                        <img class="responsive-img" src="img/32.jpg" alt="">
                        <button class="orange" type="button">Atrasti</button>
                    </div>
                </div>
                <div class="col s3 s1">
                    <div class="card-panel blue lighten-4">
                        <h3>Italija</h3>
                        <img class="responsive-img" src="img/43.jpg" alt="">
                        <button class="orange" type="button">Atrasti</button>
                    </div>
                </div>
                <div class="col s3 s1">
                    <div class="card-panel blue lighten-4">
                        <h3>Turkija</h3>
                        <img class="responsive-img" src="img/53.jpg" alt="">
                        <button class="orange" type="button">Atrasti</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section (skyrius): Popular Places (Populiaros vietos) -->

    <section id="populiarus" class="section section-populiarus scrollspy">
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
                            <!-- Kiekviena iš šių sričių turi įdomių ir įdomus atrakcionai, kad atkreipti dėmesį į jų bendravardis unikalumą. Yra
                                atrakcionai ir restoranai, kurių aplink civilizacijos temomis, kad jūsų vaikai gali
                                mėgautis taip pat! -->
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

    <section class="section section-follow purple lighten-4 white-text center">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Follow Geriausio kelionės</h4>
                    <p>Sekite mus socialiniuose tinkluose specialiems pasiūlymams</p>
                    <a href="#" class="white-text">
                        <img src="" alt="">
                        <!-- <i img="img/facebook.png">Facebook</i> -->
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript korpuso gale, kad būtų galima optimaliai pakrauti (JavaScript at end of body for optimized loading) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/script.js"></script>

</body>

</html>