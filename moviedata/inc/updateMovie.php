<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Movie</title>
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
    ?>
    <h1 class="my-4">Update Movie</h1>
    <form action="updateMovieAction.php" method="POST">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($movie['id']); ?>">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($movie['title']); ?>" required>
      </div>
      <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" value="<?php echo htmlspecialchars($movie['genre']); ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>
  </div>
</body>
</html>
