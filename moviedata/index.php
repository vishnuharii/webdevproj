<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Movie Database</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script>
    function confirmDelete() {
      return confirm("Are you sure you want to delete this?");
    }
  </script>
</head>
<body>
  <div class="container-fluid">
    <?php require('reusables/nav.php'); ?>
  </div>

  <div class="container">
    <h1 class="display-4 my-4">Movie List</h1>
    <div class="row">
      <?php
        require('reusables/connect.php');
        $query = 'SELECT * FROM movies';
        $result = mysqli_query($connect, $query);

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
          echo '<p class="text-muted">No movies available.</p>';
        }
      ?>
    </div>
  </div>
</body>
</html>
