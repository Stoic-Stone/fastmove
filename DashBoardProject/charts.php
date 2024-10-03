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
                    <a href="colis.php">
                        <i class="fas fa-table"></i>
                        <p>Colis</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
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
            <div class="body-chart">
                <div class="chart-container">
                    <div class="chart">
                        <canvas id="myChart1" width="600PX" height="600px"></canvas>
                    </div>
                    <div class="chart">
                        <canvas id="myChart2" width="600px" height="600px"></canvas>
                    </div>
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


    </body>


    </html>
<?php
} else {
    header("Location: ../EspaceClient.php");
    exit();
}
?>