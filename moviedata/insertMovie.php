<?php
require('reusables/connect.php');

$title = mysqli_real_escape_string($connect, $_POST['title']);
$genre = mysqli_real_escape_string($connect, $_POST['genre']);
$release_date = mysqli_real_escape_string($connect, $_POST['release_date']);
$rating = mysqli_real_escape_string($connect, $_POST['rating']);

$query = "INSERT INTO movies (title, genre, release_date, rating) VALUES ('$title', '$genre', '$release_date', '$rating')";

if (mysqli_query($connect, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($connect);
}
?>
