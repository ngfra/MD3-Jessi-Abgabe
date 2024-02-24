<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow">
    <title>Eco Style</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="fonts/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/home.css">
    <script src="js/bootstrap.min.js" defer></script>
    <script src="js/script.js" defer></script>
</head>

<body>
    <header id="monatbild" class="header">

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

            <!-- h1 -->
            <div class="header__titel row d-flex justify-content-end">
                <div class="col-lg-6 col-sm-12">
                    <h1>
                        <span class="primary-color h1">stilvoll und</span> <br>
                        <span class="primary-color h1">nachhaltig</span> <br>
                        <span class="h1">hier bist du richtig!</span>
                    </h1>
                    <button><a href="products.php">mehr erfahren!</a></button>
                </div>
                <!--h1-->
            </div>
        </div>
        <!--container-->
    </header>

    <main>
        <!-- intro section -->
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Willkommen bei
                            <span class="primary-color">ECO</span>
                            <span class="arizonia">Style</span>
                        </h2>
                        <p><span class="primary-color">Eco</span> <span class="arizonia">Style</span> - deinem Ziel für
                            stilvolle Nachhaltigkeit!</p>
                        <p>Entdecke eine Welt von Stil und Nachhaltigkeit mit unserer handverlesenen Kollektion an
                            umweltfreundlichen Produkten.</p>
                        <p>Bei uns findest du nicht nur Stofftaschen, sondern auch eine Vielfalt anderer nachhaltiger
                            Schätze, die deinen Lebensstil bereichern werden.</p>
                        <button><a href="products.php">Unsere Produkte entdecken!</a></button>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <img src="imgs/eco-06.jpg" alt="Eco gift" title="Eco gift">
                    </div>
                </div>
            </div>
        </section>

        <!-- newsletter box -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="newsletter d-flex justify-content-center align-items-center" action="">
                            <div class="d-flex flex-column">
                                <p class="text-center"><span class="fs-2">10% GUTSCHEIN </span><br>und kostenloser
                                    Versand für die erste Bestellung</p>
                                <div class="d-flex justify-content-center">
                                    <input class="input-left" type="text" placeholder="Email Adresse">
                                    <input class="input-right" type="submit" value="SENDEN">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--row-->
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
    //header Bild von Monat abhängig
    const monat = new Date().getMonth();
    const header = document.querySelector('#monatbild');
    const monatsBilder = {
        0: {
            bild: 'imgs/h13.jpg'
        },
        1: {
            bild: 'imgs/h13.jpg'
        },
        2: {
            bild: 'imgs/h13.jpg'
        },
        3: {
            bild: 'imgs/h13.jpg'
        },
        4: {
            bild: 'imgs/h13.jpg'
        },
        5: {
            bild: 'imgs/h13.jpg'
        },
        6: {
            bild: 'imgs/h13.jpg'
        },
        7: {
            bild: 'imgs/h13.jpg'
        },
        8: {
            bild: 'imgs/h13.jpg'
        },
        9: {
            bild: 'imgs/h013.jpg'
        },
        10: {
            bild: 'imgs/h013.jpg'
        },
        11: {
            bild: 'imgs/h13.jpg'
        },
    };

    const bildpfad = monatsBilder[monat].bild;
    header.style.backgroundImage = `url(${bildpfad})`;
    </script>
</body>

</html>