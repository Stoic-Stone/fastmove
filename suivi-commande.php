<?php

session_start();

include("./DashBoardProject/connection.php");

if(isset($_SESSION["customers_cin"])){
    if(isset($_POST["submit"])){
        $colis_id = $_POST["colis_id"];
            try{
            $sql = "SELECT * FROM colis, customers WHERE colis.colis_fk = customers.colis_fk AND colis_id = ? AND customers_cin = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("is", $colis_id, $_SESSION['customers_cin']);
            if($stmt->execute()){
                $result = $stmt->get_result();
    
                if($result->num_rows > 0){
                        header('location: ./DashBoardProject/colis.php');
                        exit();
                }else{
                    header("location:./index.php?error=Commande Introuvable!");
                    exit();
                }
            }else{
                echo "Error : " . $stmt->error;
            }
        }catch(PDOException $e) {
            error_log("Error: " . $e->getMessage());
        }
    }
}else{
    header("location: ./EspaceClient.php");
    exit();
}
