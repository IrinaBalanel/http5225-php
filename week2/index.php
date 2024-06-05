<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP: Variables and Arrays</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
        echo "<h1>Hello</h1>";
    ?>

    <p>List:</p>
    <?php echo '<p>Let\'s see a list:</p>';?>
    
    <ul>
        <li>PHP</li>
        <li>Laravel</li>
    </ul>

    <?php 
        echo "<ul>
        <li>PHP</li>
        <li>Laravel</li>
        </ul>";
    ?>
    
    <!-- Images -->
    <img src="https://placehold.co/600x400">
    <?php echo "<img src=\"https://placehold.co/600x400\">";?>
    <img src="<?php echo 'https://placehold.co/600x400'; ?>" alt="..."> 
    <!-- last one is a better approach because source is dynamic most of the time -->

    <!-- Variables -->
    <?php
        $fname = "Irina";
        $lname = "Balanel";

        echo "Hello ".$fname." ".$lname;
    ?>
    
    <!-- Arrays -->
    <?php 
        $name ["fname"] = "Irina";
        $name ["lname"] = "Balanel";
        
        $name = array("Irina", "Balanel");
        $name[0];

        echo "Hello ".$name[0]." ".$name[1];
    ?>
    
</body>
</html>