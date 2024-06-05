<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>
    <?php 
        //Exercise 1

        // $hour = date("H"); //H gives hour in 24h format, small h gives in 12h format
        // echo $hour;

        // $hour = rand(0,25); //inclusive
        // echo $hour;

        // if($hour < 12){
        //     echo "Good morning!";
        // }elseif($hour >= 12 && $hour <= 18){
        //     echo "Good afternoon!";
        // }elseif($hour > 18 && $hour < 23){
        //     echo "Good evening!";
        // }else{
        //     echo "Good night!";
        // }

        //Exercise 2

        $number = rand (0,100);

        if($number%3 == 0){
            echo "Fizz";
        }elseif($number%5 == 0){
            echo "Buzz";
        }elseif($number%3 == 0 && $number%5 == 0){
            echo "FizzBuzz";
        }else{
            echo $number;
        }
    ?>
</body>
</html>