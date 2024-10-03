<?php

$db_server = "localhost";
$db_user = "root";
$db_passwd = ""; 
$db_name = "stagesite";


$connection = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);


if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {

   
    $customerFullName = $_POST["customers_fullname"];
    $customerStoreName = $_POST["customers_storename"];
    $customerPhone = $_POST["customers_phone"];
    $customerEmail = $_POST["customers_email"];

    
    if ($_POST["customers_password"] !== $_POST["customers_password_re"]) {
        header("location: register.php?error=Le mot de passe ne correspond pas");
        exit; 
    }

    // Hash password for security 
    $customerPassword = password_hash($_POST["customers_password"], PASSWORD_DEFAULT);
    
    $customerCity = $_POST["customers_city"];
    $customerAddress = $_POST["customers_address"];
    $customerCIN = $_POST["customers_cin"];
    $customerWebsite = $_POST["customers_website"];
    $customerCompanyType = $_POST["customers_company_type"];
    $customerRC = $_POST["customers_rc"];

    $sql = "SELECT * FROM customers WHERE customers_email = ?";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $customerEmail);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 0) {
        $sql = "SELECT * FROM customers WHERE customers_cin = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s", $customerCIN);
        $stmt->execute();
        $result = $stmt->get_result();
        if( $result->num_rows === 0) {
            // Prepare and execute using prepared statements
            $sql = "INSERT INTO customers (customers_fullname, customers_storename, customers_phone, customers_email, customers_password, customers_city, customers_address, customers_cin, customers_website, customers_company_type, customers_rc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $connection->prepare($sql);


            if ($stmt) {
                // Bind parameters to prevent SQL injection
                $stmt->bind_param( "sssssssssss", $customerFullName, $customerStoreName, $customerPhone, $customerEmail, $customerPassword, $customerCity, $customerAddress, $customerCIN, $customerWebsite, $customerCompanyType, $customerRC);
                // Execute the prepared statement
                if ($stmt->execute()) {
                    header("location: success.html");
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the prepared statement
                $stmt->close();
            } else {
                echo "Error: Failed to prepare statement: " . $connection->error;
            }
        } else {
            header("location: register.php?error=" . urlencode("Ce numéro CIN est déjà utilisé !") );
            exit();
            }
    } else {
        header("location: register.php?error=" . urlencode("Un compte existe déjà avec cette adresse email !"));
        exit();
        }
}

// Close database connection
$connection->close();
