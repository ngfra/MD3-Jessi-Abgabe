<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eco Style</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="fonts/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/danke.css">
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
            <h2 class="text-center h2">Ihre Bestellung ist bei uns eingetroffen!</h2>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img class="orderplace" src="imgs/orderplaced.png" alt="Bestellung ist gegangen">
                <p>Wir bedanken uns für Ihre Bestellung. Sie bekommen bald eine Bestellbestätigung per E-Mail. Falls Sie keine E-Mail empfangen könnten, schauen Sie bitte in Ihren Spam-Ordner.</p>
            </div>

        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>

</html>