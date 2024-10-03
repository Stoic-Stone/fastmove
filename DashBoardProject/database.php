<?php
session_start();

include("connection.php");

if (isset($_POST["submit"])) {


    $colisNomDestinataire = $_POST["colis_destinataire_nom"];
    $colisTelephoneDestinataire = $_POST["colis_destinataire_telephone"];
    $colisPoids = $_POST["colis_poids"];
    $colisDimension = $_POST["colis_dimension"];
    $colisQuantite = $_POST["colis_quantite"];
    $colisDateDeDepot = $_POST["colis_date_depot"];
    $colisDateLivraison = $_POST["colis_date_livraison"];
    $colisModeDePaiement = $_POST["colis_mode_paiement"];
    $colisDestination = $_POST["colis_destination"];
    $colisAdresse = $_POST["colis_adresse"];

    $poidsVolumique = $colisDimension / 5000;

    if ($poidsVolumique < $colisPoids) {
        $customers_cin = $_SESSION["customers_cin"];
        $sql = "SELECT colis_fk FROM customers WHERE customers_cin = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $customers_cin);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $colisFK = $row["colis_fk"];
        $sql = "INSERT INTO colis (colis_destinataire, colis_destinataire_telephone, colis_poids, colis_dimension, colis_quantite, colis_date_de_ramassage, colis_date_de_livraison, colis_paiement, colis_ville, colis_adresse, colis_fk) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssddisssssi", $colisNomDestinataire, $colisTelephoneDestinataire, $colisPoids, $colisDimension, $colisQuantite, $colisDateDeDepot, $colisDateLivraison, $colisModeDePaiement, $colisDestination, $colisAdresse, $colisFK);
        if ($stmt->execute()) {
            $sql = 'SELECT * FROM tarif, colis WHERE tarif.colis_ville = ? ORDER BY colis_id desc';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $colisDestination);
            $stmt->execute();
            $tarifDestination = $stmt->get_result();
            $row = $tarifDestination->fetch_assoc();
            $tarif = $row['tarif'];
            $prix = $tarif * $colisQuantite;
            $colis_id = $row['colis_id'];
            $sql = 'UPDATE colis SET colis_prix = ? WHERE colis_id = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('di', $prix, $colis_id);
            $stmt->execute();
            $_SESSION['prix'] = $prix;
            header("location: livrer-colis.php");
        }else{
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $_SESSION["erreur"] = "Le poids volumétrique de votre colis dépasse le poids déclaré. Merci de contacter notre service client pour une vérification.";
        header("location: livrer-colis.php");
    }
}

$conn->close();
