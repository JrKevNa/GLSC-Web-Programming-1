<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $planes = array
        (
            "Bf 109G6" => 100,
            "Fw 190A-4" => 200,
            "Do 335A-0" => 400,
            "Ta 152C-3" => 500
        );
        foreach($planes as $name => $fp) 
        {
            echo $name. "<br>";
            if($fp > 350)
            {
                echo "Extreme firepower on this plane<br>";
            }
            else if($fp > 200)
            {
                echo "Very good firepower on this plane<br>";
            }
            else if($fp > 150)
            {
                echo "Good aganist fighter but may struggle against bomber<br>";
            }
            else
            {
                echo "Only good against fighter<br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>
