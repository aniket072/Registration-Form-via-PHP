<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
    $education_qualification = $_POST["education_qualification"];

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    $query = "INSERT INTO rgf (first_name, last_name, dob, gender, email, phone_number, address, education_qualification, photo)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssssssss", $first_name, $last_name, $dob, $gender, $email, $phone_number, $address, $education_qualification, $target);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Registration successful.";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>
<meta http-equiv="refresh" content="0;url=index.php" />