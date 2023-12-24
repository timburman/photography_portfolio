<?php

    include "dbconnect.php";

    $name = $email = $phone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // collect value of input field
        $name = $_REQUEST['Name'];
        $phone = $_REQUEST['Phone'];
        $email = $_REQUEST['Email'];

        $sql_query = "INSERT INTO `User Info`(`Name`, `Phone`, `Email`) VALUES('$name', $phone, '$email')";

        $mysqli->query($sql_query);

        header("Location: ../thankyou.php");
    }
?>

<!-- // Closing the connection. -->
<!-- $conn->close(); -->
