<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Details</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <?php require('reusables/nav.php'); ?>
  </div>

  <div class="container">
    <?php
      require('reusables/connect.php');
      $id = $_GET['id'];
      $query = "SELECT * FROM movies WHERE id='$id'";
      $result = mysqli_query($connect, $query);
      $movie = mysqli_fetch_assoc($result);

      if ($movie) {
        echo '<h1 class="my-4">' . htmlspecialchars($movie['title']) . '</h1>
        <p><strong>Genre:</strong> ' . htmlspecialchars($movie['genre']) . '</p>
        <p><strong>Release Date:</strong> ' . htmlspecialchars($movie['release_date']) . '</p>
        <p><strong>Rating:</strong> ' . htmlspecialchars($movie['rating']) . '</p>';
      } else {
        echo '<p>Movie not found.</p>';
      }
    ?>
  </div>
</body>
</html>
