<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1: Art</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
</head>
<body>
    <?php include('reusable/nav.php')?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 mt-5 mb-5">Gallery Information</h1>
                </div>
            </div>
        </div>
    </div>
    <?php 
        require('reusable/con.php');
        $gallery_id = $_GET['id'];
        $query = "SELECT * FROM galleries WHERE `GalleryID` = '$gallery_id'";
        $gallery = mysqli_query($connect, $query);
        $result = $gallery -> fetch_assoc();
    ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php
                    echo '<h2>'. $result['Name'].' ('. $result['CollectionSize'].' pieces)</h2>
                    <hr class="border border-primary border-3 opacity-75">
                    <p>Address: '.$result['Address'] .', '.$result['Location'].'</p>
                    <p>Contact Information: '. $result['ContactInfo'].'</p>
                    <p>Opening Hours: '. $result['OpeningHours'].'</p>
                    <p>Admission Fee: $'. $result['AdmissionFee'].'</p>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="'. $result['Website'] . '" class="btn btn-primary">Visit website</a>
                    </div>';
                ?>
            </div>
        </div>
    </div>

</body>
</html>