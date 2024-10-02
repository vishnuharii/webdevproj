<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $connect = mysqli_connect(
        'localhost',
        'root', 
        'root', 
        'webdev');

    if (!$connect) {
        echo 'Error code: ' . mysqli_connect_errno();
        echo 'Error Message: ' . mysqli_connect_error();
        exit;
    }

    $query = 'SELECT `Name`, `Hex` FROM colors';
    $results = mysqli_query($connect, $query);

    if (!$results) {
        echo 'Error Message: ' . mysqli_error($connect);
    } else {
        echo 'The query found: ' . mysqli_num_rows($results) . ' result';

        $rows = mysqli_fetch_all($results, MYSQLI_ASSOC); 

        for ($i = 0; $i < count($rows); $i++) {
            echo '<div style="background-color: ' . htmlspecialchars($rows[$i]['Hex']) . '; padding: 20px; margin: 10px 0; color: #fff;">' 
                . htmlspecialchars($rows[$i]['Name']) 
                . '</div>';
        }
    }

    
    ?>
</body>
</html>
