<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
  <form action="#" method="POST" id="registration-form">
            <div class="form-group">
              <label for="movie-register" class="text-muted mb-1"><small>Movie Name</small></label>
              <input name="movie" id="movie-register" class="form-control" type="text" placeholder="Pick a Movie" autocomplete="off" />
            </div>

            <div class="form-group">
              <label for="in_stock" class="text-muted mb-1"><small>Stock</small></label>
              <input name="stock" id="in_stock" class="form-control" type="text" placeholder="Stock" autocomplete="off" />
            </div>

            <div class="form-group">
              <label for="rating" class="text-muted mb-1"><small>Rating</small></label>
              <input name="rating" id="rating" class="form-control" type="text" placeholder="Rating" autocomplete="off" />
            </div>
            
            <select class="form-select" name="select">
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
            

           

            <button type="submit" name="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">
                Save Movie
            </button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['movie'];
    $stock = $_POST['stock'];
    $rating = $_POST['rating'];
    $genre_id = $_POST['select'];

    $insert_query = "insert into movies(name, stock, rating, genre_id)
        values('$name', $stock, $rating, $genre_id)
    ";
    $result = mysqli_query($connection, $insert_query);

    if($result){
        echo "Movie Added successfully";
    }
}

?>