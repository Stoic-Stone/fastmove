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
                    <a href="#" class="active">
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
                    <a href="colis.php">
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
            <div class="profile-title">
                <h2>Bienvenue sur votre tableau de bord M. <span style="font-family:cursive; font-size:xx-large; color:#f50038"><?php echo $_SESSION['customers_fullname']; ?></span></h2>
                <ul>
                    <li>
                        <a href="#">
                            <div class="img-box">
                                <img src="./images/profile Image.jpg" alt="profile">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="title-info">
                <p>Dashboard</p>
                <i class="fas fa-chart-bar"></i>
            </div>
            <div class="data-info">
                <div class="boxs-display">
                    <div class="box">
                        <i class="fa-solid fa-cubes"></i>
                        <div class="data">
                            <p>Colis</p>
                            <?php
                            include('connection.php');
                            $sql = 'SELECT SUM(colis_quantite) AS total_quantite FROM colis, customers WHERE customers.colis_fk = colis.colis_fk AND customers_cin = "' . $_SESSION['customers_cin'] . ' " ';
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo '<span>' . $row['total_quantite'] . '</span>';
                            if ($row['total_quantite'] == '') {
                                echo '<span> 0 </span>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-truck-fast"></i>
                        <div class="data">
                            <p>Colis Livrés</p>
                            <?php
                            include('connection.php');
                            $sql = 'SELECT SUM(colis_quantite) as colis_livre FROM colis, customers WHERE customers.colis_fk = colis.colis_fk AND colis_status = "livré" AND customers_cin = "' . $_SESSION['customers_cin'] . ' " ';
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo '<span>' . $row['colis_livre'] . '</span>';
                            if ($row['colis_livre'] == '') {
                                echo '<span> 0 </span>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="box">
                        <i class="fas fa-dollar"></i>
                        <div class="data">
                            <p>Dépense Totale</p>
                            <?php
                            $sql = 'SELECT SUM(colis_prix) AS total_prix FROM colis, customers WHERE customers.colis_fk = colis.colis_fk AND customers_cin = "' . $_SESSION['customers_cin'] . ' " ';
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo '<span>' . $row['total_prix'] . '<span style="font-size: x-small;"> Dhs</span></span>';
                            if ($row['total_prix'] == '') {
                                echo '<span> 0 </span>';
                            }
                            ?>
                            <div style="font-size: xx-small;"></div>
                        </div>

                    </div>
                </div>

                <!--Charts-->
                <div class="chart-position" style="position: absolute;">
                    <div class="chart">
                        <canvas id="myChart1" width="300PX" height="300px"></canvas>
                    </div>
                    <div class="chart">
                        <canvas id="myChart2" width="300px" height="300px"></canvas>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx1 = document.getElementById('myChart1');

                <?php
                // Include connection file once
                include('connection.php');

                // Initialize variables outside if statements
                $colis = 0;
                $colisLivre = 0;

                // Combine similar queries
                $sql = 'SELECT SUM(colis_quantite) AS total_quantite, SUM(CASE WHEN colis_status = "Livré" THEN colis_quantite ELSE 0 END) AS colis_livre FROM colis, customers WHERE customers.colis_fk = colis.colis_fk AND customers_cin = "' . $_SESSION['customers_cin'] . ' " ';

                $result = $conn->query($sql);

                if ($result && $row = $result->fetch_assoc()) {
                    $colis = $row['total_quantite'];
                    $colisLivre = $row['colis_livre'];
                } else {
                    // Handle potential errors here (e.g., display an error message)
                    $colis = 0;
                    $colisLivre = 0;
                }

                $conn->close(); // Close connection after use
                ?>

                new Chart(ctx1, {
                    type: 'doughnut',
                    data: {
                        labels: ['Colis Livrés', 'Colis Non Livrés'],
                        datasets: [{
                            label: '# of Votes',
                            data: [<?php echo $colisLivre; ?>, <?php echo $colis - $colisLivre; ?>],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
            <script>
                const ctx2 = document.getElementById('myChart2');
                <?php
                // Include connection file once
                include('connection.php');

                // Initialize variables outside if statements
                $colis = 0;
                $colisLivre = 0;

                // Combine similar queries
                $sql = 'SELECT SUM(colis_quantite) AS total_quantite, SUM(CASE WHEN colis_status = "livré" THEN colis_quantite ELSE 0 END) AS colis_livre FROM colis, customers WHERE customers.colis_fk = colis.colis_fk AND customers_cin = "' . $_SESSION['customers_cin'] . ' " ';

                $result = $conn->query($sql);

                if ($result && $row = $result->fetch_assoc()) {
                    $colis = $row['total_quantite'];
                    $colisLivre = $row['colis_livre'];
                } else {
                    // Handle potential errors here (e.g., display an error message)
                    $colis = 0;
                    $colisLivre = 0;
                }

                $conn->close(); // Close connection after use
                ?>

                new Chart(ctx2, {
                    type: 'bar',
                    data: {
                        labels: ['Colis', 'Colis Livrés', 'Colis Non Livrés'],
                        datasets: [{
                            label: '# of Votes',
                            data: [<?php echo $colis; ?>, <?php echo $colisLivre; ?>, <?php echo $colis - $colisLivre; ?>],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
            <!-- Charts End-->

            <a style="text-decoration: none;" href="livrer-colis.php">
                <div class="livrer">
                    <p style="font-family:fantasy; letter-spacing: 5px; ">Livrer Colis</p>
                    <i style="margin-left: 10px;" class="fa-solid fa-truck-fast"></i>
                </div>
            </a>
            <div class="title-info">
                <p>Colis</p>
                <i class="fas fa-table"></i>
            </div>

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