
<?php
include("connection.php");

// Requête SQL pour récupérer les données (exemple)
$sql = "SELECT * FROM colis, customers WHERE colis.colis_fk = customers.colis_fk AND customers_cin = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION["customers_cin"]);
$stmt->execute();
$result = $stmt->get_result();

// Afficher les données dans le tableau
if ($result->num_rows > 0) {
    foreach($result as $row) {
        echo "<tr>";
        echo "<td>" . $row["colis_id"] . "</td>";
        echo "<td>" . $row["colis_destinataire"] . "</td>";
        echo "<td>" . $row["colis_destinataire_telephone"] . "</td>";
        echo "<td>" . $row["colis_date_de_ramassage"] . "</td>";
        echo "<td>" . $row["colis_quantite"] . "</td>";
        echo "<td><span class='etat'>" . $row["colis_etat"] . "</td>";
        echo "<td><span class='status'>" . $row["colis_status"] . "</td>";
        echo "<td>" . $row["colis_date_de_livraison"] . "</td>";
        echo "<td>" . $row["colis_ville"] . "</td>";

        $sql = "SELECT livreur_nom, livreur_telephone FROM colis, livreur WHERE colis.livreur_cin = livreur.livreur_cin ";
        $result = $conn->query($sql);
        $prix = $row["colis_prix"] ;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<td>". $row["livreur_nom"] . "</td>";
                echo "<td>". $row["livreur_telephone"] . "</td>";
            }
        }else {
            echo "<td> Pas de livreur </td>";
            echo "<td> - </td>";
        }
        echo "<td><span class='price'>" . $prix. "<span style='font-size: x-small;'> Dhs</span> </span></td>";
        echo "</tr>";
    }
} else {
    echo "<span> 0 <span>";
}

echo "</table>";

// Fermer la connexion
$conn->close();
?>