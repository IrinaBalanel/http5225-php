<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment1: Art</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <!-- Navigation here -->
  <?php include('reusable/nav.php')?>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">All paintings</h1>
        </div>
      </div>
    </div>
  </div>
  
  <?php 
    require('reusable/con.php');
    $query = 'SELECT p.id, p.eng_title, p.eng_author, p.gpt_description, p.filename, g.GalleryID, g.Name AS GalleryName
      FROM Paintings p
      JOIN Galleries g ON p.gallery_id = g.GalleryID';
    $painting = mysqli_query($connect, $query);
  ?>
    <div class="container-fluid">
    <div class="container">
      <div class="row">
        <?php
          foreach($painting as $painting){
            echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <img src="' . $painting['filename']. '" alt="'.$painting['gpt_description'].'"/>
                        </div>
                        <div class="mx-auto p-2">
                          <h5 class="card-title">' . $painting['eng_title'] . '</h5>
                          <i><h6>' . $painting['eng_author'] . '</h6></i>
                          <ul class="list-inline mb-0 mt-4">
                            <li class="list-inline-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                              </svg>
                            </li>
                            <li class="list-inline-item">'. $painting['GalleryName'] .'</li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-footer">
                            <div class="row">
                              <a href="gallery.php?id=' . $painting['GalleryID'] . '" class="btn btn-primary">About gallery</a>
                            </div>
                       </div>
                    </div>
                </div>';  
          }
        ?>

</body>
</html>