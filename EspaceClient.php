<!DOCTYPE html>

<html dir="ws_config_dir" lang="ws_config_lang" style="height:100%;">

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
    <title>Connectez-vous - Livrbox </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, minimal-ui" name="viewport">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" href=".img/white-logo.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
<body>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col mx-auto" style=" position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);">
                    <div class="login row justify-content-center">
                        <div class="col-md-5">
                            <div class="card">
                                <section class="login ">
                                    <div class="card-body">
                                        <form action="login.php" method="post" class=" md-float-material">
                                            <div class="text-center title-style mb-6">
                                                <br>
                                                <h1 class="mb-2">Espace client</h1>
                                                <hr>
                                                <div class="text-center">
                                                    <a href="index.html"><img style="width:100px" src=".img/white-logo.png"></a><br><br><br>
                                                </div>
                                            </div>
                                            <?php if(isset($_GET['error'])) { ?>
                                                <p class="error"> <?php echo $_GET['error']; ?> </p><br>
                                                <?php } ?>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="login_customers_email" class="form-control" placeholder="Votre adresse email" required>
                                            </div>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </div>
                                                </div>
                                                <input type="password" class="form-control" id="password" name="login_customers_password" placeholder="Votre mot de passe" required>
                                                <img class="eye" src=".img/eye-close.png" id="eye" onclick="change()">
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-block">
                                                        Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="text-center pt-4">
                                            <div class="font-weight-normal fs-16"> <i> Vous n'avez pas de compte ?</i> ><a class="btn-link font-weight-normal" style="color: #f50038;" href="register.php"><strong>
                                                Inscrivez-vous ici</strong> </a></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Afficher et Cacher le mot de passe -->
    <script src="js/script.js"></script>
</body>

</html>