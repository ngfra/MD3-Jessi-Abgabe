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
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
        
                            <!-- nav links -->
                            <div class="navbar-collapse justify-content-end collapse" id="navbarNavAltMarkup" >
                                <div class="navbar-nav site-nav-link d-flex">
                                    <a class="d-flex justify-content-center" href="products.php">Produkte</a>
                                    <a class="d-flex justify-content-center" href="shop.php">Shop</a>
                                    <a class="d-flex justify-content-center" href="aboutus.php">Über uns</a>
                                    <a class="d-flex justify-content-center" href="contact.php">Kontakt</a>
                                </div>
                            </div>
                        </nav>
                </div> <!--container-->

                <!-- search bar -->
                <div class="col-lg-5">
                    <div class="container d-flex justify-content-end mt-4 fs-4">
                        <div class="d-flex align-items-center">
                            <form class="d-flex input-group w-auto">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon"/>
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </form>
                            <i class="fas fa-user ms-2" ></i>
                            <i class="fas fa-shopping-cart ms-2"></i> 
                        </div>
                    </div>
                </div>
            </div> <!--row-->
        </div> <!--container-->    
    </header>

    <main>
        <div class="container">
            <div class="row">
                <h2 class="text-center h2">Hier findest du uns</h2>
                <p class="text-center">Nachhaltigkeit in jedem Faden!</p>
                <div class="d-flex justify-content-center">
                    <button class="shop-btn"><a href="shop.php">Zum Shop</a></button>
                </div>
            </div>
            <div class="about-container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="border-img mb-4">
                            <img class="border-img ps-5" src="imgs/chefin.png" alt="Unseres Geschäft" title="Unseres Geschäft">
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <p>Wir sind hier, um deine Fragen zu beantworten, Feedback entgegenzunehmen oder einfach nur Hallo zu sagen. Deine Gedanken und Anregungen sind uns wichtig. Kontaktiere uns über das untenstehende Formular oder direkt per E-Mail. Wir freuen uns darauf, von dir zu hören und stehen bereit, um zu helfen, wo immer wir können. <br> <br><span class="italic">Maria Goller - Geschäftsführerin und <span class="primary-color">ECO</span>
                            <span class="arizonia">Style</span> Team</span></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p class="p-3"><span class="primary-color fs-3">ECO</span>
                        <span class="arizonia fs-3">Style</span> <br>
                        Innstraße 11 <br>
                        6020 Innsbruck <br> <br>
                        
                        <span class="fw-bold">Montag - Freitag </span> 06:00 - 18:00 <br>
                        <span class="fw-bold">Samstag </span>08:00 - 15:00 <br> <br>
                        <span class="fw-bold" >Telefonnummer: </span><a class="tel-mail" href="tel:067763450911">0677 63450911</a> <br>
                        <span class="fw-bold" >E-mail: </span><a class="tel-mail" href="mailto:ngocfrankl@gmail.com">ecostyle@contactus.at</a></p>
                </div>

                <div class="col-md-8">
                    <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.345380198234!2d11.391368312949831!3d47.2685026111421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d6bfbbbd37193%3A0x16b759bb4208fc29!2sStadtturm!5e0!3m2!1sde!2sat!4v1702038503910!5m2!1sde!2sat" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
  </body>
</html>
