<?php
require('reusables/connect.php');
$id = mysqli_real_escape_string($connect, $_POST['id']);
$query = "DELETE FROM movies WHERE id='$id'";

if (mysqli_query($connect, $query)) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}
?>
