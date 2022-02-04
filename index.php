<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>
    <h1>
        <?php
            //1) “Hello, my name is [firstname] [lastname].”
            function sayHello($firstName, $lastName, $age) {
                echo "Hello, my name is $firstName $lastName.";
            }

                sayHello("Colette", "Gallant", 23);

        echo "<br>";
            //2) This statement is conditional based on the [age] parameter.
            $age = 23;

            if ($age > 18){
                print "I am old enough to vote in the United States.";
            } else {
                print "I am not old enough to vote in the United States.";
            } 

        echo "<br>";
            //3)Calculate the days based on the number given for age (3rd sentence)
            $date1 = "11/22/1998";
            $date2 = date("m/d/y");

            function dateDiff($date1, $date2) {
                $date1_ts = strtotime($date1);
                $date2_ts = strtotime($date2);
                $diff = $date2_ts - $date1_ts;
                return round ($diff / 86400);
            }

            $dateDiff = dateDiff($date1, $date2);

            print("I am " . $dateDiff . " days old.");

        echo "<br>";
            //4) Add the current date to your page with PHP 
            echo "Today is " . date("m/d/y") . "<br>";
        ?>
    </h1>
    </body>
</html>