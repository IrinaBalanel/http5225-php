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
    <div style="position: relative; top: 0px; left: 0px;">
        <img src="./images/gallery.jpg" class="img-fluid"/>
    </div>
    <div style="position: absolute; top: 380px; left: 550px; max-width: 790px; text-align: center;">
        <h1 style="font-weight: 600;"  class="display-1 mt-5 mb-5"><mark>Welcome to ArtDeco!</mark></h1>
        <p style="background-color: #EFEFEF;" class="fs-4 p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">Explore Russian soul through the eyes and the brush of Isaac Levittan, one of the most famous artist of all times</p>
        <a href="./paintings.php" class="fs-4 btn btn-warning">See all paintings</a>
    </div>
</body>
</html>