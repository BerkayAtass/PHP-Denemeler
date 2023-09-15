<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $temp = 1;
        while($temp<15){
            $temp++;
            if($temp == 10){
                continue;
            }
            echo "Temp : " . $temp . "<br/>";
        }
    ?>
</body>
</html>