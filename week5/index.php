<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Connection</title>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'php-week5');
        if(!$connect){
            echo "Erro code: " .mysqli_connect_errorno();
            echo "Erro Message: " .mysqli_connect_error();
            exit;
        } 
        // else{
        //     echo "Connected!";
        // }

        $query = 'SELECT `Name`, `Hex` FROM colors';
        $results = mysqli_query($connect, $query);

        if(!$results){
            echo 'Error Message: ' .mysqli_error($connect); //this will fetch the specific error
        } else {
            echo 'Total records found: ' .mysqli_num_rows($results);
            // print_r ($results);
            echo '<br>';
            foreach ($results as $i){
                echo $i ['Name'];
                echo '<div style="height: 30px; width: 100px; background-color:'.$i ['Hex'].'"></div>'; 
            }
        }

    ?>
</body>
</html>