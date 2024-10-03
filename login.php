<?php

session_start();
$db_server = "localhost";
$db_user = "root";
$db_passwd = "";

$db_name = "stagesite";

$conn = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);

if(!$conn)
{
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login_customers_email']) && isset($_POST['login_customers_password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $costumers_email = validate($_POST['login_customers_email']);
    $costumers_password = validate($_POST['login_customers_password']);

    $sql = "SELECT * FROM customers WHERE customers_email = ? ";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $costumers_email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($costumers_password, $row["customers_password"])) {
                $_SESSION["customers_cin"] = $row["customers_cin"];
                $_SESSION["customers_fullname"] = $row["customers_fullname"];
                header("location: DashBoardProject/dashboard.php");
                exit();
            } else {
                // Handle incorrect password
                header("location: espaceclient.php?error=Incorrect password");
                exit();
            }
        } else {
            // Handle user not found
            header("location: espaceclient.php?error=Email not found");
            exit();
        }
    } catch (mysqli_sql_exception $e) {
        // Handle database errors
        echo "Database error: " . $e->getMessage();
    }
} else {
    header("location: EspaceClient.php?error");
    exit();
}
error_reporting(E_ALL);