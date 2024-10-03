<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FASTER - Logistics Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/white-logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
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
            <a href="index.html" class="navbar-brand ml-lg-3">
                <img style="width: 150px;" src="img/white-logo.png" alt="logo">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Acceuil</a>
                    <a href="index.php#about" class="nav-item nav-link">À propos</a>
                    <a href="index.php#service" class="nav-item nav-link">Services</a>
                    <a href="index.php#avantage" class="nav-item nav-link">Avantages</a>
                    <a href="index.php#price" class="nav-item nav-link">Tarifs</a>
                    <a href="" class="nav-item nav-link">Contact</a>
                </div>
                <a href="register.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                    style="margin: 20px;">Devenir Client</a>
                <a href="EspaceClient.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                    style="margin: 20px;">Espace Client</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Contact</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0">Acceuil</p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img src="img/contact.png" class="img-fluid w-100" style="height: 815px">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Contactez-Nous</h6>
                    <h1 class="mb-4">Contact pour toute question</h1>
                    <div class="col-lg-5 contact-form">
                        <div class="bg-primary py-5 px-4 px-sm-5 contact-wrap contact-pages mb-0">

                            <form class="py-5" action="send-email.php" method="post">

                                <div class="form-group" style="background-color: aliceblue;">
                                    <input type="text" name="name" class="form-control border-0 p-4" placeholder="Votre Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-0 p-4" placeholder="Votre Email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" id="subject" name="subject" placeholder="Sujet"
                                        required="required" data-validation-required-message="Veuillez Entrer Un Sujet" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" name="message" placeholder="Message"
                                        required="required" data-validation-required-message="Veuillez Entrer Un Message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <button class="btn btn-dark btn-block border-0 py-3" name="submit" type="submit">Envoyer Message</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->


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
                            <a class=" mb-2 nav-item nav-link" href="index.html"><i
                                    class="fa fa-angle-right mr-2"></i>Acceuil</a>
                            <a class=" mb-2 nav-item nav-link" href="#about"><i class="fa fa-angle-right mr-2"></i>À
                                propos</a>
                            <a class=" mb-2 nav-item nav-link" href="#service"><i
                                    class="fa fa-angle-right mr-2"></i>Services</a>
                            <a class=" mb-2 nav-item nav-link" href="#avantage"><i
                                    class="fa fa-angle-right mr-2"></i>Avantages</a>
                            <a class=" mb-2 nav-item nav-link" href="#price"><i
                                    class="fa fa-angle-right mr-2"></i>Tarifs</a>
                            <a class="mb-2 nav-item nav-link" href="contact.html"><i
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
                    <a href="EspaceClient.php" class="btn btn-primary btn-dark py-2 px-4 d-none d-lg-block"
                        style="margin: 20px;">Espace Client</a>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Alert -->
    <script src="js/sweetalert.js"></script>
    <?php if (isset($_SESSION['done'])) { ?>
        <script>
            swal("Message envoyée !", "Nous vous remercions pour votre message. Nous vous répondrons dans les meilleurs délais.", "success");
        </script>
    <?php
        unset($_SESSION['done']);
    } else if (isset($_SESSION['error'])) { ?>
        <script>
            swal("Oooops...", "Votre message n\'a pas pu être envoyée. Veuillez réessayer plus tard.", "error");
        </script>
    <?php
        unset($_SESSION['error']);
    } ?>

</body>

</html>