<?php
session_start();

if (isset($_SESSION['customers_cin']) && isset($_SESSION['customers_fullname'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="../img/white-logo.png" rel="icon">
        <title>Dashboard</title>
    </head>

    <body>

        <div class="menu">
            <ul>
                <li>
                    <a href="../index.php">
                        <img src="../.img/white-logo.png" alt="logo" style="width: 100%"><br>
                    </a>
                </li>
                <br><br>
                <li>
                    <a href="dashboard.php">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="livrer-colis.php">
                        <i class="fa-solid fa-truck-fast"></i>
                        <p>Livraison</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
                        <i class="fas fa-table"></i>
                        <p>Colis</p>
                    </a>
                </li>
                <li>
                    <a href="charts.php">
                        <i class="fas fa-chart-pie"></i>
                        <p>Charts</p>
                    </a>
                </li>
                <li>
                    <a href="../index.php">
                        <i class="fas fa-home"></i>
                        <p>Acceuil</p>
                    </a>
                </li>
                <li class="log-out">
                    <a href="../logout.php">
                        <i class="fas fa-sign-out"></i>
                        <p>Log out </p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th>Code d'envoi</th>
                        <th>Destinataire</th>
                        <th>Téléphone</th>
                        <th>Date de ramassage</th>
                        <th>Quantité</th>
                        <th>Etat</th>
                        <th>Status</th>
                        <th>Date de livraison</th>
                        <th>Ville</th>
                        <th>Livreur</th>
                        <th>Livreur Telephone</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include("db.php"); ?>
                </tbody>
            </table>
        </div>

    </body>

    </html>
<?php
} else {
    header("Location: ../EspaceClient.php");
    exit();
}
?>