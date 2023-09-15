<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $colors = array("green", "yellow", "purple", "pink", "red", "brown");
    
    echo "<pre>";
    print_r($colors);
    echo "</pre>";

    echo "<br>--------------------------------------------------------------------<br>";

    $colorsNew["GREEN"] = "green";
    $colorsNew["YELLOW"] = "yellow";
    $colorsNew["PURPLE"] = "purple";
    $colorsNew["PINK"] = "pink";
    $colorsNew["RED"] = "red";
    $colorsNew["BROWN"] = "brown";


    echo "<pre>";
    print_r($colorsNew);
    echo "</pre>";

    ?>

    
</body>
</html>