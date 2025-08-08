<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "lab_demo";
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Database connected successfully!";

$name       = $_POST['name'];
$age        = $_POST['age'];
$height     = $_POST['height'];
$occupation = $_POST['occupation'];
$location   = $_POST['location'];
$degree     = $_POST['degree'];
$institution = $_POST['institution'];
$year       = $_POST['year'];
$father     = $_POST['father'];
$mother     = $_POST['mother'];
$siblings   = $_POST['siblings'];
$hobbies    = $_POST['hobbies'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];

$sql = "INSERT INTO biodata (
            name, age, height, occupation, location,
            degree, institution, year,
            father, mother, siblings,
            hobbies, email, phone
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sissssssssssss",  
    $name, $age, $height, $occupation, $location,
    $degree, $institution, $year,
    $father, $mother, $siblings,
    $hobbies, $email, $phone
);

if (mysqli_stmt_execute($stmt)) {
    echo "Data submitted successfully!";
}
else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>
