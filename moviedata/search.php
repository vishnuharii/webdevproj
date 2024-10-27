<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Movies - Movie Database</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <?php require('reusables/nav.php'); ?>
  </div>

  <div class="container">
    <h1 class="display-4 my-4">Search Movies</h1>
    <form method="GET" action="search.php" class="mb-4">
      <div class="input-group">
        <input type="text" name="query" class="form-control" placeholder="Search for movies..." required>
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>

    <div class="row">
      <?php
        require('reusables/connect.php');
        if (isset($_GET['query'])) {
          $query = mysqli_real_escape_string($connect, $_GET['query']);
          $sql = "SELECT * FROM movies WHERE title LIKE '%$query%' OR genre LIKE '%$query%' OR release_date LIKE '%$query%'";
          $result = mysqli_query($connect, $sql);

          if ($result && mysqli_num_rows($result) > 0) {
            while ($movie = mysqli_fetch_assoc($result)) {
              echo '<div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">' . htmlspecialchars($movie['title']) . '</h5>
                    <p class="card-text">Genre: ' . htmlspecialchars($movie['genre']) . '</p>
                    <p class="card-text">Rating: ' . htmlspecialchars($movie['rating']) . '</p>
                    <a href="viewMovie.php?id=' . htmlspecialchars($movie['id']) . '" class="btn btn-primary">Details</a>
                  </div>
                </div>
              </div>';
            }
          } else {
            echo '<p class="text-muted">No movies found matching your search.</p>';
          }
        }
      ?>
    </div>
  </div>
</body>
</html>
