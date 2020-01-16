<?php 

include("db_connection.php");


    

if (
    isset($_POST["vardas"]) && !empty($_POST["vardas"]) &&
    isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["message"]) && !empty($_POST["message"])
) {

    $name = trim($_POST["vardas"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $to = "z.andruskevic@gmail.com";
        $subject = "Kontaktine forma: " . $name;
        $txt = $message;
        $headers = "Form: $email" . "\r\n";
        "CC: zbig.andr@gmail.com";

        // mail($to, $subject, $txt, $headers);

        $sql = "INSERT INTO messages(id, name, email, message, date)
                VALUES (null, '$name', '$email', '$message', null)";

        if (mysqli_query($conn, $sql)) {

            echo "message_sent";
        } else {

            echo "database_error";
        }

    } else {

        echo "email_error";
    }
}