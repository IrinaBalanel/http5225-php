<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1: Art</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php include('reusable/nav.php')?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 mt-5 mb-5">All Galleries</h1>
                </div>
            </div>
        </div>
    </div>
    <?php 
        require('reusable/con.php');
        $query = "SELECT * FROM galleries";
        $gallery = mysqli_query($connect, $query);
    ?>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php
                    echo '<ul class="list-group list-group-flush">';
                    foreach($gallery as $gallery){
                        echo '<li class="list-group-item"><a href="gallery.php?id=' . $gallery['GalleryID'] . '"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg>'.$gallery['Name'].'</a></li>';
                    }
                ?>
            </div>
        </dev>
    </dev>
</body>
</html>