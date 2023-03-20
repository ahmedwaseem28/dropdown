<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    <select class="form-select" aria-label="Default select example">
        <option selected>Please select</option>
        <?php
        include 'connection.php';
            $select_query = "select * from genre";
            $result = mysqli_query($connection, $select_query);

            while($row = mysqli_fetch_assoc($result)){
                $genre_id = $row['id'];
                $genre_name = $row['name'];
                
                echo "<option value=$genre_id>$genre_name</option>";
            }
        ?>
        <!-- <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option> -->
    </select>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>