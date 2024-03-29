<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eco Style</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="fonts/css/all.css" />
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/shop.css">
    <script src="js/bootstrap.min.js" defer></script>

</head>

<body>
    <header class="header">
        <div class="container header__container">

            <div class=" row flex-column-reverse flex-lg-row">
                <div class="col-lg-7">
                    <nav class="navbar navbar-expand-lg mt-3">
                        <!-- logo -->
                        <a href="index.php"><img id="logo" src="imgs/logo01.png" alt="Eco style" title="Eco style"></a>

                        <!-- burger menu -->
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- nav links -->
                        <div class="navbar-collapse justify-content-end collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav site-nav-link d-flex">
                                <a class="d-flex justify-content-center" href="products.php">Produkte</a>
                                <a class="d-flex justify-content-center" href="shop.php">Shop</a>
                                <a class="d-flex justify-content-center" href="aboutus.php">Über uns</a>
                                <a class="d-flex justify-content-center" href="contact.php">Kontakt</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--container-->

                <!-- search bar -->
                <div class="col-lg-5">
                    <div class="container d-flex justify-content-end mt-4 fs-4">
                        <div class="d-flex align-items-center">
                            <form class="d-flex input-group w-auto">
                                <input type="search" class="form-control rounded" placeholder="Search"
                                    aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </form>
                            <i class="fas fa-user ms-2"></i>
                            <i class="fas fa-shopping-cart ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--row-->
        </div>
        <!--container-->
    </header>

    <main>
        <div class="container">
            <div class="row mb-5">
                <h2 class="text-center h2">Stilvoll und nachhaltig shoppen</h2>
                <p class="text-center">Nachhaltigkeit in jedem Faden!</p>
            </div>

            <form method="post" action="mail.php">
                <!-- product 01 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-01.jpg" alt="Bio Baumwolle Wattepad"
                                title="Bio Baumwolle Wattepad">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Bio-Baumwolle Wattepad <br>
                            <span class="fw-bold">Farbe:</span> Naturweiß <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€7,90</p>
                        <input id="anzahl" name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 02 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-02.jpg" alt="Baumwolle Einkauftasche"
                                title="Baumwolle Einkauftasche">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Baumwolle Einkauftasche<br>
                            <span class="fw-bold">Farbe:</span> Naturweiß <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€19,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 03 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-03.jpg" alt="Bambus Besteckset"
                                title="Bambus Besteckset">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Bambus Besteckset <br>
                            <span class="fw-bold">Farbe:</span> Grau/Brau <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€14,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 04 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-04.jpg" alt="Zero waste Geschirrschwamm"
                                title="Zero waste Geschirrschwamm">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Zero waste Geschirrschwamm<br>
                            <span class="fw-bold">Farbe:</span> Naturweiß <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€6,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 05 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-05.jpg" alt="Bio Baumwolle Schal"
                                title="Bio Baumwolle Schal">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Bio-Baumwolle Schal <br>
                            <span class="fw-bold">Farbe:</span> Weiß/Blau <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€24,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 06 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-06.jpg" alt="Geschenkpapier"
                                title="Geschenkpapier">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Geschenkpapier <br>
                            <span class="fw-bold">Farbe:</span> Naturweiß <br>
                            <span class="fw-bold">Größe: </span>100x100cm
                        </p>
                        <p>€3,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 07 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-07.jpg" alt="Zero waste Binden"
                                title="Zero waste Binden">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Zero waste Binden<br>
                            <span class="fw-bold">Farbe:</span> Naturweiß <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€9,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 08 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-08.jpg" alt="Bio Baumwolle Servierte"
                                title="Bio Baumwolle Servierte">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Bio-Baumwolle Servierte <br>
                            <span class="fw-bold">Farbe:</span> Naturweiß <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€14,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 09 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-09.jpg" alt="Mütze" title="Mütze">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Bio-Baumwolle Mütze <br>
                            <span class="fw-bold">Farbe:</span> Olive <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€19,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <!-- product 10 -->
                <div class="row">
                    <div class="col-sm-5 d-flex gap-4">
                        <div class="border-img-shop mb-4">
                            <img class="border-img ps-4" src="imgs/eco-10.jpg" alt="Obst Tasche" title="Obst Tasche">
                        </div>
                    </div>

                    <div class="col-sm-7 d-flex gap-4">
                        <p class="col-5">Obst Netzbeutel <br>
                            <span class="fw-bold">Farbe:</span> Naturweiß <br>
                            <span class="fw-bold">Größe: </span>Onesize
                        </p>
                        <p>€2,90</p>
                        <input name="artikelanzahl[]" class="number" type="number" min="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5">
                        <p>Versand und Lieferung. Versandkostenfrei ab 100 € </p>
                    </div>
                    <div class="col-sm-7 d-flex gap-4">
                        <p>
                            <input type="radio" id="post" name="shipping" value="Lieferung mit österreichische Post" />
                            <label for="post">Österreichische Post <span>€5,90</span></label><br>

                            <input type="radio" id="sah" name="shipping" value="Im Geschäft abholen" />
                            <label class="sah" for="sab">Selbstabholung <span>€0</span></label><br>

                            <span class="padding-right">Zwischensumme: </span><span id="zwischensumme">€0</span><br>

                            <span class="padding-right">Mehrwertsteuer (20%): </span><span id="mwst">€0</span><br>

                            <span class="padding-right">Gesamtsumme: </span><span id="gesamt" name="gesamt">€0</span>

                            <input type="hidden" id="gesamtsumme" name="gesamtsumme" value="">

                        </p>
                    </div>
                </div>


                <div class="row info-container">
                    <p class="text-uppercase fs-4">persönliche angabe</p>
                    <p>Die Adresse muss in Österreich sein.</p>

                    <div class="d-flex gap-1 flex-column flex-md-row">
                        <label for="vorname"></label>
                        <input class="info left mb-2" type="text" name="vorname" id="vorname" placeholder="Vorname*">
                        <br>

                        <label for="nachname"></label>
                        <input class="info right mb-2" type="text" name="nachname" id="nachname"
                            placeholder="Nachname*"> <br>
                    </div>

                    <div class="d-flex gap-1 flex-column flex-md-row">
                        <label for="email"></label>
                        <input class="info left mb-2" type="email" name="email" id="email" placeholder="Email*">

                        <label for="tele"></label>
                        <input class="info right mb-2" type="" name="tele" id="tele" placeholder="Telefonnumer*">
                    </div>

                    <div class="d-flex gap-1 flex-column flex-md-row">
                        <label for="address"></label>
                        <input type="text" name="address" id="address" class="info mb-2"
                            placeholder="Adresse (Straße, Hausnummer)*">
                    </div>

                    <div class="d-flex gap-1 flex-column flex-md-row">
                        <label for="city"></label>
                        <input required class="info left mb-2" type="text" name="city" id="city" placeholder="Stadt*">

                        <label for="postal-code"></label>
                        <input required class="info right mb-2" type="text" name="postal-code" id="postal-code"
                            placeholder="Postleitzahl*">
                    </div>

                    <div class="d-flex gap-1 flex-column flex-md-row align-items-baseline gap-2">
                        <input type="checkbox" id="dsgvo-check" name="dsgvo-check" required="">
                        <label for="dsgvo-check">Ich stimme den allgemeinen Geschäftsbedingungen und
                            Datenschutzinformationen von Eco Style zu.</label>
                    </div>


                    <button class="btn" type="submit" name="submit">Senden</button>
                </div>

            </form>

        </div>
    </main>

    <?php include 'footer.php'; ?>


    <script src="js/script.js"></script>
</body>

</html>