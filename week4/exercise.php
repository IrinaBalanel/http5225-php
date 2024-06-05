<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<!-- Let’s use the JSONPlaceholder API, a fake online REST API for testing and
prototyping. In this exercise, we'll fetch a list of users and display their
information using a for loop.
1. First, create a new PHP file, let's call it exercise.php.
2. Use the following code to get user data from the JSONPlaceholder API
and display it using a for loop: -->

<?php
    // Function to fetch user data from the JSONPlaceholder API
    function getUsers() {
        $url = "https://jsonplaceholder.typicode.com/users";
        $data = file_get_contents($url);
        return json_decode($data, true);
    }


    // Get the list of users
    $users = getUsers();
    // print_r ($users);
    echo "<h2>User Informatoin</h2>";
    if (!empty($users)) {
        echo "<ul>";
            for($i=0; $i<count($users); $i++){
                echo "<li>";
                echo "<h3>Name: ".$users[$i]['name']."</h3>";
                echo "<p>User Name: ".$users[$i]['username']."</p>";
                echo "<p>Email: ".$users[$i]['email']."</p>";
                echo "<p>City: ".$users[$i]['address']['city']."</p>";
                echo "</li>";
            }
        echo "<ul>";
    } else {
        echo "Not found";
    }
?>


</body>
</html>