<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FASTER - Logistics Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="img/white-logo.png" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white" style="vertical-align:bottom;">
                    <small><i class="fa fa-phone-alt mr-2"></i><a
                            href="tel:0656309973/0680506431">0656309973/0680506431</a></small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i><a
                            href="mailto:fastmovemessagerie@gmail.com">fastmovemessagerie@gmail.com</a></small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <a class="btn btn-outline-light btn-social mr-2" target="_blank"
                            href="https://web.facebook.com/profile.php?id=61557147358760"><i
                                class="fab fa-facebook-f"></i></a>
                    </a>
                    <a class="text-white px-2" href="">
                        <a class="btn btn-outline-light btn-social mr-2" target="_blank"
                            href="https://www.linkedin.com/company/fast-move-express/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </a>
                    <a class="text-white px-2" href="">
                        <a class="btn btn-outline-light btn-social mr-2" target="_blank"
                            href="https://www.instagram.com/fastmoveexpress1/"><i class="fab fa-instagram"></i></a>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <img style="width: 150px;" src="img/white-logo.png" alt="logo">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link ">Acceuil</a>
                    <a href="#about" class="nav-item nav-link">À propos</a>
                    <a href="#service" class="nav-item nav-link">Services</a>
                    <a href="#avantage" class="nav-item nav-link">Avantages</a>
                    <a href="#price" class="nav-item nav-link">Tarifs</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="register.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                    style="margin: 20px;">Devenir Client</a>
                <?php
                if (isset($_SESSION['customers_cin']) && $_SESSION['customers_fullname']) { ?>
                    <a href="DashboardProject/dashboard.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                        style="margin: 20px;">Espace Client</a>
                <?php
                } else { ?>
                    <a href="EspaceClient.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                        style="margin: 20px;">Espace Client</a>
                <?php } ?>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-primary mb-4">Solution d'expédition pour gérer vos livraisons en ligne</h1>
            <h1 class="text-white display-3 mb-5">Expresse Service</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <p>Veuillez utiliser ce formulaire pour suivre votre commande manuellement</p>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?> </p><br>
                <?php } ?>
                <form action="suivi-commande.php" method="post">
                    <div class="input-group">
                        <input type="number" name="colis_id" class="form-control border-light" 
                            style="padding: 30px; background-color: aliceblue;" placeholder="Tapez votre numéro de suivi">
                        <div class="input-group-append">
                            <button type="submit" name="submit" class="btn btn-primary px-3">Suivre Maintenant</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div id="about" class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0" style="font-size: xx-large;">10+ Ans d'Experience</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">CONNAÎTRE NOUS</h6>
                    <h1 class="mb-4">FastMove</h1>
                    <p class="mb-4">Fastmove est la nouvelle solution d'expédition pour gérer vos livraisons en ligne.
                        Donnez à votre entreprise en ligne un avantage concurrentiel grâce aux solutions de livraison
                        sur mesure de commerce électronique de Fastmove.
                        <br><br>
                        La société Fastmove assure l’expédition, l’arrivage, le ramassage, la livraison, le retour des
                        fonds,la confirmation, le stock , la gestion documentaire et propose à chaque client
                        professionnel ou particulier une offre de prestation complète, variée et optimale grâce à une
                        expérience riche et professionnelle sur le marché de la messagerie nationale..
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Obtenez un devis</h6>
                    <h1 class="mb-4">Demandez un devis gratuit</h1>
                    <p class="mb-4">Vous souhaitez obtenir un devis personnalisé pour votre projet ? Remplissez ce
                        formulaire et l'un de nos experts vous contactera dans les plus brefs délais pour discuter de
                        vos besoins et vous établir un devis gratuit et sans engagement.</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">8,845</h1>
                            <h6 class="font-weight-bold mb-4">Colis livrés</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">100</h1>
                            <h6 class="font-weight-bold mb-4">Villes couvertes</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">50</h1>
                            <h6 class="font-weight-bold mb-4">Clients satisfaits</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5" action="demande-devis.php" method="post">
                            <div class="form-group" style="background-color: aliceblue;">
                                <input type="text" name="name" class="form-control border-0 p-4" placeholder="Your Name"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 p-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <select name="service" class="custom-select border-0 px-4" style="height: 47px;" required>
                                    <option selected>Select A Service</option>
                                    <option value="Ramassage">Ramassage</option>
                                    <option value="Livraison">Livraison</option>
                                    <option value="Expédition">Expédition</option>
                                    <option value="Fonds et paiements">Fonds et paiements</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" name="submit" type="submit">Obtenez un devise</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->


    <!-- Services Start -->
    <div id="service" class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Notre Services</h6>
                <h1 class="mb-4">Meilleurs Services Logistiques</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-cube text-dark pr-3" aria-hidden="true"></i>
                        <h6 class="text-white font-weight-medium m-0">Ramassage</h6>
                    </div>
                    <p>Le ramassage est un service mis en place par la société Fastmove afin de faciliter au maximum
                        votre processus d’expédition.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Livraison</h6>
                    </div>
                    <p>Grâce à une connaissance du terrain, nos livreurs récupèrent les colis pour une livraison en
                        mains propres à vos clients dans plusieurs villes.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-space-shuttle text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Expédition</h6>
                    </div>
                    <p>L’équipe de Fastmove assure l’acheminement de vos colis à votre destinataire contre un accusé de
                        réception.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-credit-card text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Fonds et paiements</h6>
                    </div>
                    <p>Nous assure le retour de fonds dans 48 H, des Virements, des bons de livraison d’une manière
                        régulière sur les services de messagerie de nos clients.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div id="avantage" class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="img/feature.jpg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Les avantages de choisir Fastmove</h6>
                    <h1 class="mb-4">Services logistiques plus rapides, sûrs et fiables</h1>
                    <ul class="list-inline">
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i>Best In Industry</h6>
                            <p class="mb-4">Gérez des commandes à partir de tous les canaux sur lesquels vous vendez, y
                                compris woocommerce et Shopify.</p>
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i>Emergency Services</h6>
                        </li>
                        <p class="mb-4">Qu'ils soient transactionnels ou postaux, les systèmes d'insertion hautes
                            performances de Fastmove offrent un traitement des documents sécurisé, efficace et flexible.
                        </p>
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Customer Support</h6>
                        </li>
                        <p class="mb-4">Vous pouvez rechercher vos colis dont vous avez manqué la livraison ou vérifier
                            l'état de l’avancement de vos colis qui doivent être livrés.</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    <div id="price" class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Tarifs</h6>
                <h1 class="mb-4">Zones De Livraison Et Tarifs</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;"></small>40<small
                                    class="align-bottom text-muted font-weight-medium"
                                    style="font-size: 16px; line-height: 40px;">/Dhs</small>
                            </h1>
                        </div>
                        <div class="vertical-marquee">
                            <div class="d-flex flex-column align-items-center py-4 marquee-content">
                                <p>Tetouan</p>
                                <p>Ouazzane</p>
                                <p>Agadir</p>
                                <p>Chefchaouen</p>
                                <p>Ksar el kebir</p>
                                <p>Khemis sahel</p>
                                <p>Laaouamera</p>
                                <p>kassita</p>
                                <p>Fes</p>
                                <p>settat</p>
                                <p>Had soualem</p>
                                <p>ait ben haddou</p>
                                <p>lbrouj</p>
                                <p>ain mezouar</p>
                                <p>jemaa ashaim</p>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION['customers_cin']) && $_SESSION['customers_fullname']) { ?>
                            <a style="display: block;" href="DashBoardProject/livrer-colis.php" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        <?php
                        } else { ?>
                            <a style="display: block;" href="EspaceClient.php" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;"></small>43<small
                                    class="align-bottom text-muted font-weight-medium"
                                    style="font-size: 16px; line-height: 40px;">Dhs</small>
                            </h1>
                        </div>
                        <div class="vertical-marquee">
                            <div class="d-flex flex-column align-items-center py-4 marquee-content">
                                <p>Ait amira</p>
                                <p>Temsia</p>
                                <p>Azrou ( regions-agadir )</p>
                                <p>Had ait belfaa</p>
                                <p>Drarga</p>
                                <p>Anza ( regions-agadir )</p>
                                <p>Aourir</p>
                                <p>Houara ( regions-agadir )</p>
                                <p>Tamraght</p>
                                <p>Taghazoute</p>
                                <p>Sidi bibi</p>
                                <p>Edchiera jihadia</p>
                                <p>Ait melloul</p>
                                <p>Biougra</p>
                                <p>Lqliaa</p>
                                <p>Chetouka ait baha</p>
                                <p>Inezgane</p>
                                <p>Ain harrouda</p>
                                <p>Mediouna</p>
                                <p>Tit mellil</p>
                                <p>Dar bouazza</p>
                                <p>Bouskoura</p>
                                <p>Oulad tayeb ( region-fes )</p>
                                <p>Skhinate ( rigons-fes )</p>
                                <p>Ain allah</p>
                                <p>Khouribga</p>
                                <p>Ain cheggag</p>
                                <p>Sefrou</p>
                                <p>Midelt</p>
                                <p>Boudnib</p>
                                <p>El gara</p>
                                <p>Boumia</p>
                                <p>Boulemane</p>
                                <p>Outat el haj</p>
                                <p>Missour</p>
                                <p>Kettara</p>
                                <p>Errachidia</p>
                                <p>Tahaaoute</p>
                                <p>Er-rich</p>
                                <p>Ait ourir</p>
                                <p>Talsint</p>
                                <p>Tahla</p>
                                <p>Tendrara</p>
                                <p>Ourika ( region marrakech )</p>
                                <p>Tamensourt</p>
                                <p>Tiztoutine</p>
                                <p>Tamallalt</p>
                                <p>Sidi bou othmane</p>
                                <p>Amizmiz</p>
                                <p>Figuig</p>
                                <p>Imintanoute</p>
                                <p>Madagh</p>
                                <p>Bni drar</p>
                                <p>Skhour rehamna</p>
                                <p>Aklim</p>
                                <p>Kariat arkmane</p>
                                <p>Ain bni mathar</p>
                                <p>Ben guerir</p>
                                <p>Bouarfa</p>
                                <p>Oued amlil</p>
                                <p>Zeghanghane</p>
                                <p>Guercif</p>
                                <p>Ahfir</p>
                                <p>Kelaat des sraghna</p>
                                <p>Saidia</p>
                                <p>Al aaroui</p>
                                <p>Selouane</p>
                                <p>Jerada</p>
                                <p>Taourirt</p>
                                <p>Midar</p>
                                <p>Laayoune charqiya</p>
                                <p>Taza</p>
                                <p>Bni ansar</p>
                                <p>Taouima</p>
                                <p>Sidi rahal ( region casablanca )</p>
                                <p>El mansouria</p>
                                <p>Ben ahmed ( region-settat )</p>
                                <p>Bouznika</p>
                                <p>Berrechid</p>
                                <p>Benslimane</p>
                                <p>Deroua</p>
                                <p>Nouaceur</p>
                                <p>Mohammedia</p>
                                <p>Moulay driss zerhoun</p>
                                <p>Agourai</p>
                                <p>Boufakrane</p>
                                <p>Sabaa aiyoun</p>
                                <p>Ifrane</p>
                                <p>Ain taoujdate</p>
                                <p>Tiflet</p>
                                <p>Khemisset</p>
                                <p>El hajeb</p>
                                <p>Sidi slimane</p>
                                <p>Azrou ( regions-meknes )</p>
                                <p>Sidi allal el bahraoui</p>
                                <p>Sidi allal tazi</p>
                                <p>Belksiri</p>
                                <p>Sidi yahya el gharb</p>
                                <p>Souk el arbaa du rharb</p>
                                <p>Sidi kacem</p>
                                <p>jorf el melha</p>
                                <p>Esouihla</p>
                                <p>Essaouira</p>
                                <p>safi</p>
                                <p>bir jdid</p>
                                <p>Sebt Gzoula</p>
                                <p>Youssoufia</p>
                                <p>Zemamra</p>
                                <p>oualidia</p>
                                <p>oulad salah</p>
                                <p>tamanar</p>
                                <p>rommani</p>
                                <p>meaziz</p>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION['customers_cin']) && $_SESSION['customers_fullname']) { ?>
                            <a style="display: block;" href="DashBoardProject/livrer-colis.php" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        <?php
                        } else { ?>
                            <a style="display: block;" href="EspaceClient.php" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;"></small>45<small
                                    class="align-bottom text-muted font-weight-medium"
                                    style="font-size: 16px; line-height: 40px;">Dhs</small>
                            </h1>
                        </div>
                        <div class="vertical-marquee">
                            <div class="d-flex flex-column align-items-center py-4 marquee-content">
                                <p>Martil</p>
                                <p>Mdiq</p>
                                <p>Marina-smir</p>
                                <p>Cabo-negro</p>
                                <p>Ksar sghir</p>
                                <p>Dalia ( region ksar sghir )</p>
                                <p>Moulay bouselham</p>
                                <p>Lalla mimouna</p>
                                <p>Oued laou</p>
                                <p>Azla</p>
                                <p>Stehat</p>
                                <p>Fnidq</p>
                                <p>Khmis mdiq</p>
                                <p>Bab berred</p>
                                <p>Bab taza</p>
                                <p>Masmouda</p>
                                <p>Asjen</p>
                                <p>Mokrisset</p>
                                <p>Teroual</p>
                                <p>Ain dorij</p>
                                <p>Sidi bousber</p>
                                <p>Sidi redouane</p>
                                <p>Zoumi</p>
                                <p>Taliouine</p>
                                <p>Oulad berhil</p>
                                <p>Aoulouz</p>
                                <p>Tafraout</p>
                                <p>Tiznit</p>
                                <p>Oulad teima</p>
                                <p>Taroudannt</p>
                                <p>Akhfennir</p>
                                <p>Boujdour</p>
                                <p>Dakhla</p>
                                <p>Tarfaya</p>
                                <p>Laayoune</p>
                                <p>Laayoune port</p>
                                <p>El ouatia</p>
                                <p>Tan tan</p>
                                <p>Oulad ayad</p>
                                <p>Feryata</p>
                                <p>Smara</p>
                                <p>Zag</p>
                                <p>Assa</p>
                                <p>Sidi ifni</p>
                                <p>Foum jemaa</p>
                                <p>Bouizakarne</p>
                                <p>Ouled mbarek</p>
                                <p>Had bradia</p>
                                <p>Oulad ali loued</p>
                                <p>Guelmim</p>
                                <p>Boujniba</p>
                                <p>Afourer</p>
                                <p>Dar ould zidouh</p>
                                <p>Tlat loulad</p>
                                <p>Bejaad</p>
                                <p>Demnate</p>
                                <p>Mrirt</p>
                                <p>Khenifra</p>
                                <p>Zaouiat cheikh</p>
                                <p>Oued zem</p>
                                <p>El ksiba</p>
                                <p>Azilal</p>
                                <p>Kasba tadla</p>
                                <p>Ain chkef</p>
                                <p>Imouzzer kandar</p>
                                <p>Taounate</p>
                                <p>Sebt oulad nemma</p>
                                <p>Fquih ben salah</p>
                                <p>Merzouga</p>
                                <p>Msemrir</p>
                                <p>Boumalne dades</p>
                                <p>Arfoud</p>
                                <p>Jorf</p>
                                <p>Tinejdad</p>
                                <p>Kalaat mgouna</p>
                                <p>Goulmima</p>
                                <p>Rissani</p>
                                <p>Tinghir</p>
                                <p>Tagounite</p>
                                <p>Sidi mokhtar</p>
                                <p>Farkhana</p>
                                <p>Ras el ma ( regions-nador )</p>
                                <p>Sidi rahal ( region kalaatt sraghna )</p>
                                <p>Agdz</p>
                                <p>Bni bouayach</p>
                                <p>Ben tib</p>
                                <p>Skoura</p>
                                <p>Chemmaia</p>
                                <p>Tata</p>
                                <p>Chichaoua</p>
                                <p>Attaouia</p>
                                <p>Ouarzazate</p>
                                <p>Zagora</p>
                                <p>Zaio</p>
                                <p>Issaguen</p>
                                <p>Targuist</p>
                                <p>Driouch</p>
                                <p>Imzouren</p>
                                <p>Ajdir</p>
                                <p>Ain leuh</p>
                                <p>El hadj kaddour</p>
                                <p>Khenichet</p>
                                <p>dar el kebdani</p>
                                <p>had draa</p>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION['customers_cin']) && $_SESSION['customers_fullname']) { ?>
                            <a style="display: block;" href="DashBoardProject/livrer-colis.php" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        <?php
                        } else { ?>
                            <a style="display: block;" href="EspaceClient.php" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Témoignage</h6>
                <h1 class="mb-4">Nos Clients Disent</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg"
                            style="width: 60px; height: 60px;" alt="testimonial-1">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Anas Jarniji</h6>
                            <small>- CEO Ultrada</small>
                        </div>
                    </div>
                    <p class="m-0">Votre service de livraison est indispensable pour nous en tant qu'entreprise, il nous
                        fait gagner beaucoup de temps et d'efforts.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg"
                            style="width: 60px; height: 60px;" alt="testimonial-2">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Mohamed Amine Boussaid</h6>
                            <small>- Ingénieur</small>
                        </div>
                    </div>
                    <p class="m-0">كنشكر فريق ... على الاحترافية ديالو، توصيل الطلبات ديالنا كيكون دقيق و في الوقت
                        المناسب</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg"
                            style="width: 60px; height: 60px;" alt="testimonial-3">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Fatima El Alaoui</h6>
                            <small>- Etudiante</small>
                        </div>
                    </div>
                    <p class="m-0">خدمة ديال التوصيل زوينة بزاف، وصلو ليا الطلب ديالي فوقت محدد، شكرا بزاف.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Ahmed Chawqi</h6>
                            <small>- CEO SETUP-GAME</small>
                        </div>
                    </div>
                    <p class="m-0">Je remercie l'équipe de FastMove pour son professionnalisme, la livraison de nos
                        commandes est précise et dans les délais.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Aicha Benkirane</h6>
                            <small>- Employée de banque</small>
                        </div>
                    </div>
                    <p class="m-0">Wow, votre service est incroyable ! J'ai reçu ma commande à l'heure prévue et elle
                        était parfaitement emballée.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- Footer Start -->
    <div class="container-fluid footimg text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Contactez-Nous</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Tanger</p>
                        <p><a href="tel:0656309973/0680506431"><i class="fa fa-phone-alt mr-2"></i>
                                0656309973/0680506431</a></p>
                        <p><a href="mailto:fastmovemessagerie@gmail.com"><i
                                    class="fa fa-envelope mr-2"></i>fastmovemessagerie@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" target="_blank"
                                href="https://web.facebook.com/profile.php?id=61557147358760"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" target="_blank"
                                href="https://www.linkedin.com/company/fast-move-express/"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" target="_blank"
                                href="https://www.instagram.com/fastmoveexpress1/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Liens rapides</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class=" mb-2 nav-item nav-link" href="index.php"><i
                                    class="fa fa-angle-right mr-2"></i>Acceuil</a>
                            <a class=" mb-2 nav-item nav-link" href="#about"><i class="fa fa-angle-right mr-2"></i>À
                                propos</a>
                            <a class=" mb-2 nav-item nav-link" href="#service"><i
                                    class="fa fa-angle-right mr-2"></i>Services</a>
                            <a class=" mb-2 nav-item nav-link" href="#avantage"><i
                                    class="fa fa-angle-right mr-2"></i>Avantages</a>
                            <a class=" mb-2 nav-item nav-link" href="#price"><i
                                    class="fa fa-angle-right mr-2"></i>Tarifs</a>
                            <a class="mb-2 nav-item nav-link" href="contact.php"><i
                                    class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <img src="img/white-logo.png" alt="logo" style="width: 100px;"><br><br>
                <p>La société Fastmove assure l’expédition, l’arrivage, le ramassage, la livraison, le retour des
                    fonds,la confirmation, le stock , la gestion documentaire et propose à chaque client professionnel
                    ou particulier une offre de prestation complète, variée et optimale grâce à une expérience riche et
                    professionnelle sur le marché de la messagerie nationale.</p><br>
                <div class="input-group">
                    <a href="register.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                        style="margin: 20px;">Devenir Client</a>
                    <?php
                    if (isset($_SESSION['customers_cin']) && $_SESSION['customers_fullname']) { ?>
                        <a href="DashboardProject/dashboard.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                            style="margin: 20px;">Espace Client</a>
                    <?php
                    } else { ?>
                        <a href="EspaceClient.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                            style="margin: 20px;">Espace Client</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Alert js -->
    <script src="js/sweetalert.js"></script>
    <?php if (isset($_SESSION['done'])) {
        echo 'great' ?>
        <script>
            swal("Demande envoyée !", "Nous vous remercions pour votre demande. Nous vous répondrons dans les meilleurs délais.", "success");
        </script>
    <?php
        unset($_SESSION['done']);
    } else if (isset($_SESSION['error'])) { ?>
        <script>
            swal("Oooops...", "Votre demande n\'a pas pu être envoyée. Veuillez réessayer plus tard.", "error");
        </script>
    <?php
        unset($_SESSION['error']);
    } ?>

</html>