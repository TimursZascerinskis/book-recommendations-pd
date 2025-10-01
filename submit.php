<?php

$servername = "localhost";
$username = "book_review_user_011102025";
$password = "password";
$database = "book_review_01102025";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$firstName = $_POST['username'];
$lastName = $_POST['surname'];
$bookTitle = $_POST['title'];
$reviewText = $_POST['apraksts'];



$fullName = $firstName . ' ' . $lastName;

$stmt = $conn->prepare("INSERT INTO book_review (full_name, book_title, review_text, rating) VALUES (?, ?, ?, ?)");

$stmt->bind_param("sssi", $fullName, $bookTitle, $reviewText, $rating);


$stmt->close();
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo ($_POST['username']); ?></p>
    <p> dati veiksmīgi nosūtītu serverim</p>
    <a href="index">back to start</a>
    <a href="list">list</a>
</body>

</html>