<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>User Information</h2>
        </div>
        <div class="col">
            
        </div>
    </div>

    <?php
        // Function to fetch user data from the JSONPlaceholder API
        function getUsers() {
            // $url = "https://jsonplaceholder.typicode.com/users";
            $url = "users.json";
            //echo gettype($data);
            $data = file_get_contents($url);
            return json_decode($data, true);
        }


        // Get the list of users
        $users = getUsers();
        // print_r ($users);
        if (!empty($users)){
            for($i=0; $i<count($users); $i++){
                // foreach ($users as $i){
                // echo "<li>";
                // echo "<h3>Name: ".$users[$i]['name']."</h3>";
                // echo "<p>User Name: ".$users[$i]['username']."</p>";
                // echo "<p>Email: ".$users[$i]['email']."</p>";
                // echo "<p>City: ".$users[$i]['address']['city']."</p>";
                // echo "</li>";
                echo '<div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">'.$users[$i]['name'].'</h5>
                        <p class="card-text">'.$users[$i]['email'].'</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                </div>';
            }

        } else {
            echo "Not found";
        }
            
    ?>


</body>
</html>