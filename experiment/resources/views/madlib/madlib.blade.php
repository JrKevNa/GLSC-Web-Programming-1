<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="madlib.blade.php" method="get">
        Color: <input type="text" name="color">
        <br>
        Plural noun: <input type="text" name="pluralNoun">
        <br>
        Celebrity: <input type="text" name="celebrity">
        <br>
        <input type="submit">
    </form>

    <?php
        

        $color = $_POST["color"];
        $pluralNoun = $_POST["pluralNoun"];
        $celebrity = $_POST["celebrity"];

        /*
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
        */
    ?>

</body>
</html>