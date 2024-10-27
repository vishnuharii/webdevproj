<?php
// Database connection
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$id = $_GET['id'];
$query = "SELECT * FROM movies WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$movie = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $movie['title'] ?> - Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?= $movie['title'] ?></h1>
    <p><strong>Overview:</strong> <?= $movie['overview'] ?></p>
    <p><strong>Genres:</strong> <?= $movie['genres'] ?></p>
    <p><strong>Release Date:</strong> <?= $movie['release_date'] ?></p>
    <p><strong>Runtime:</strong> <?= $movie['runtime'] ?> minutes</p>
    <p><strong>Rating:</strong> <?= $movie['vote_average'] ?></p>
</body>
</html>
