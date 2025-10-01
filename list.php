<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$database = "book_review_24092025";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Savienojuma kļūda: " . $conn->connect_error);
}

echo '
  <a href="index.html">Pievienot atsauksmi</a> | 
<hr>';

$sql = "SELECT full_name, book_title, review_text FROM book_review";
$result = $conn->query($sql);

$ratingLabels = [
    1 => 'Nelasāma',
    2 => 'Slikta',
    3 => 'Viduvēja',
    4 => 'Laba',
    5 => 'Lieliska'
];

echo "<h1>Grāmatu atsauksmes</h1>";

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "fullname:" . ($row['full_name']);
        echo "title:" . ($row['book_title']);
        echo "Apraksts: " . ($row['review_text']);
        echo "</li><br>";
    }
    echo "</ul>";
} else {
    echo "Nav atsauksmju.";
}

$conn->close();
