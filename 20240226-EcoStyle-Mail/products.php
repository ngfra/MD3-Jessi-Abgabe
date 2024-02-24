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
                <h2 class="text-center h2">Unsere Produkte</h2>
                <p class="text-center">Mit Leidenschaft Hand gemacht! <br>Alle Design von unseren Produkten sind stilvoll und einzigartig!</p>
                <div class="d-flex justify-content-center">
                    <button class="shop-btn"><a href="shop.php">Zum Shop</a></button>
                </div>
            </div>

            <!-- 1.Row -->
            <div class="row">
                <!-- 1.columm -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-01.jpg" alt="Bio Baumwolle Wattepad" title="Bio Baumwolle Wattepad">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Bio Baumwolle Wattepad
                                    </button>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Sanfte Hautpflege mit unseren Bio-Baumwoll-Wattepads. Hochwertig und zertifiziert, bieten sie eine nachhaltige Reinigungslösung für deine tägliche Routine. Hypoallergen und umweltfreundlich – das Beste für deine Haut!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->

                <!-- 2.columm -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-02.jpg" alt="Baumwolle Einkauftasche" title="Baumwolle Einkauftasche">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Baumwolle Einkauftasche
                                    </button>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Stilvoll und umweltfreundlich: Unsere Baumwoll-Einkaufstasche ist die perfekte nachhaltige Wahl für deine Einkäufe. Robust, geräumig und aus hochwertiger Baumwolle gefertigt, begleitet sie dich stilvoll durch den Alltag – ein Statement für Nachhaltigkeit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->

                <!-- 3.Columm -->
                <!-- 2.colum -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-03.jpg" alt="Bambus Besteckset" title="Bambus Besteckset">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Bambus Besteckset
                                    </button>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Hergestellt aus umweltfreundlichem Bambus, bietet es eine stilvolle Alternative zu herkömmlichem Besteck. Mit Gabel, Messer, Löffel und Tragetasche ist dieses Set praktisch für jede Mahlzeit – ein Must-have für umweltbewusste Genießer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->
            </div> <!--row-->

<!-- ############################################################################### -->
            <!-- 2.Row -->
            <div class="row">
                <!-- 1.columm -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-04.jpg" alt="Zero waste Geschirrschwamm" title="Zero waste Geschirrschwamm">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                        Zero waste Geschirrschwamm
                                    </button>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Sanfte Hautpflege mit unseren Bio-Baumwoll-Wattepads. Hochwertig und zertifiziert, bieten sie eine nachhaltige Reinigungslösung für deine tägliche Routine. Hypoallergen und umweltfreundlich – das Beste für deine Haut!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->

                <!-- 2.columm -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-05.jpg" alt="Bio Baumwolle Schal" title="Bio Baumwolle Schal">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingFive">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Bio-Baumwolle Schal
                                    </button>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Stilvoll und umweltfreundlich: Unsere Baumwoll-Einkaufstasche ist die perfekte nachhaltige Wahl für deine Einkäufe. Robust, geräumig und aus hochwertiger Baumwolle gefertigt, begleitet sie dich stilvoll durch den Alltag – ein Statement für Nachhaltigkeit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->

                <!-- 3.Columm -->
                <!-- 2.colum -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-06.jpg" alt="Geschenkpapier" title="Geschenkpapier">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingSix">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        Geschenkpapier 100% Recycling
                                    </button>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Hergestellt aus umweltfreundlichem Bambus, bietet es eine stilvolle Alternative zu herkömmlichem Besteck. Mit Gabel, Messer, Löffel und Tragetasche ist dieses Set praktisch für jede Mahlzeit – ein Must-have für umweltbewusste Genießer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->
            </div> <!--row-->

<!-- ############################################################################### -->
            <!-- 3.Row -->
            <div class="row">
                <!-- 1.columm -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-07.jpg" alt="Zero waste Binden" title="Zero waste Binden">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingSeven">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        Bio-Baumwolle Einlage
                                    </button>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Sanfte Hautpflege mit unseren Bio-Baumwoll-Wattepads. Hochwertig und zertifiziert, bieten sie eine nachhaltige Reinigungslösung für deine tägliche Routine. Hypoallergen und umweltfreundlich – das Beste für deine Haut!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->

                <!-- 2.columm -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-08.jpg" alt="Bio Baumwolle Servierte" title="Bio Baumwolle Servierte">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingEight">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                        Bio Baumwolle Servierte
                                    </button>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Stilvoll und umweltfreundlich: Unsere Baumwoll-Einkaufstasche ist die perfekte nachhaltige Wahl für deine Einkäufe. Robust, geräumig und aus hochwertiger Baumwolle gefertigt, begleitet sie dich stilvoll durch den Alltag – ein Statement für Nachhaltigkeit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->

                <!-- 3.Columm -->
                <!-- 2.colum -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-09.jpg" alt="Mütze" title="Mütze">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingNine">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                        Bio-Baumwolle Mütze
                                    </button>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Hergestellt aus umweltfreundlichem Bambus, bietet es eine stilvolle Alternative zu herkömmlichem Besteck. Mit Gabel, Messer, Löffel und Tragetasche ist dieses Set praktisch für jede Mahlzeit – ein Must-have für umweltbewusste Genießer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->
            </div> <!--row-->

<!-- ############################################################################### -->
            <!-- 4.Row -->
            <div class="row">
                <!-- 1.columm -->
                <div class="col-lg-4 mb-3">
                    <img src="imgs/eco-10.jpg" alt="Obst Tasche" title="Obst Tasche">

                    <!-- accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <div class="accordion-header" id="headingTen">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                        Obst Netzbeutel
                                    </button>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Sanfte Hautpflege mit unseren Bio-Baumwoll-Wattepads. Hochwertig und zertifiziert, bieten sie eine nachhaltige Reinigungslösung für deine tägliche Routine. Hypoallergen und umweltfreundlich – das Beste für deine Haut!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--col-->
            </div> <!--row-->
        </div>
    </main>

    <?php include 'footer.php'; ?>

  </body>
</html>
