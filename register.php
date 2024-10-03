<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        :root {
            --main-color: #f50038;
            --second-color: #e85776;
            --third-color: #c42346;
            --fourth-color: #f76f8d;
            --fifth-color: #c23052;
            --hover-color: #b6042b;
            --focus-color: #b6042b;
        }
    </style>

    <title>Accueil - FAST MOVE </title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description"
        content="Fastmove est la nouvelle solution d'expédition pour gérer vos livraisons en ligne. Donnez à votre entreprise en ligne un avantage concurrentiel grâce aux solutions de livraison sur mesure de commerce électronique de Fastmove." />
    <link rel="icon" href=".img/white-logo.png" sizes="16x16" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>


<body>


    <section class="sign-up-area ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-action">
                        <div class="form-heading text-center">
                            <a href="index.php"><img src=".img/white-logo.png" style="width: 100px;"
                                    alt="Logo"></a><br><br>
                            <h3 class="form-title">Devenir client</h3>
                        </div>
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"> <?php echo $_GET['error']; ?> </p><br>
                        <?php } ?>
                        <form action="database.php" method="POST">
                            <div class="row">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="customers_fullname"
                                            placeholder="Nom complet *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="customers_storename"
                                            placeholder="Nom du magasin *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="customers_phone"
                                            placeholder="Numero de telephone *" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="customers_email"
                                            placeholder="Adresse electronique *" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <label style="display: block;">
                                            <input type="password" class="form-control" name="customers_password"
                                                placeholder="Mot de passe *" minlength="8" required />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="customers_password_re"
                                            placeholder="Confirmation de mot de passe *" minlength="8" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="customers_city"
                                            placeholder="Ville *" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="customers_address"
                                            placeholder="Adresse *" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="customers_cin" placeholder="CIN *"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="customers_website"
                                            placeholder="Site web" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <select class=" form-control" name="customers_company_type"
                                            style="height: auto;">
                                            <option value="Auto entrepreneur">Auto entrepreneur</option>
                                            <option value="SARL">SARL</option>
                                            <option value="Particulier">Particulier</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="customers_rc"
                                            placeholder="Registre de commerce" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="default-btn btn-two" type="submit" name="submit"
                                        style="display: block; margin: auto;">
                                        Devenir client
                                    </button>
                                    <br>
                                </div>
                                <br>
                                <div class="col-12">
                                    <p class="account-desc" style="text-align: center;">
                                        <i>Vous avez déjà un compte?</i>
                                        <a class="btn-link font-weight-normal" href="EspaceClient.php"><strong>Espace clients</strong></a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>