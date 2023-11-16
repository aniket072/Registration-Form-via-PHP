<?php
    include("connection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $education = $_POST["education"];

        // Upload photo
        $photo_name = $_FILES["photo"]["name"];
        $photo_temp = $_FILES["photo"]["tmp_name"];
        $photo_path = "uploads/" . $photo_name;

        move_uploaded_file($photo_temp, $photo_path);

        // Insert data into the database
        $sql = "INSERT INTO rgf (first_name, last_name, dob, gender, email, phone, address, education, photo)
                VALUES ('$first_name', '$last_name', '$dob', '$gender', '$email', '$phone', '$address', '$education', '$photo_path')";

        if ($con->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    $con->close();
?>
